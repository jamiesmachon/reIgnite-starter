<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Option API
 *
 * @package WordPress
 * @subpackage Option
 */

/**
 * Retrieves an option value based on an option name.
 *
 * If the option does not exist, and a default value is not provided,
 * boolean false is returned. This could be used to check whether you need
 * to initialize an option during installation of a plugin, however that
 * can be done better by using add_option() which will not overwrite
 * existing options.
 *
 * Not initializing an option and using boolean `false` as a return value
 * is a bad practice as it triggers an additional database query.
 *
 * The type of the returned value can be different from the type that was passed
 * when saving or updating the option. If the option value was serialized,
 * then it will be unserialized when it is returned. In this case the type will
 * be the same. For example, storing a non-scalar value like an array will
 * return the same array.
 *
 * In most cases non-string scalar and null values will be converted and returned
 * as string equivalents.
 *
 * Exceptions:
 *
 * 1. When the option has not been saved in the database, the `$default` value
 *    is returned if provided. If not, boolean `false` is returned.
 * 2. When one of the Options API filters is used: {@see 'pre_option_$option'},
 *    {@see 'default_option_$option'}, or {@see 'option_$option'}, the returned
 *    value may not match the expected type.
 * 3. When the option has just been saved in the database, and get_option()
 *    is used right after, non-string scalar and null values are not converted to
 *    string equivalents and the original type is returned.
 *
 * Examples:
 *
 * When adding options like this: `add_option( 'my_option_name', 'value' )`
 * and then retrieving them with `get_option( 'my_option_name' )`, the returned
 * values will be:
 *
 *   - `false` returns `string(0) ""`
 *   - `true`  returns `string(1) "1"`
 *   - `0`     returns `string(1) "0"`
 *   - `1`     returns `string(1) "1"`
 *   - `'0'`   returns `string(1) "0"`
 *   - `'1'`   returns `string(1) "1"`
 *   - `null`  returns `string(0) ""`
 *
 * When adding options with non-scalar values like
 * `add_option( 'my_array', array( false, 'str', null ) )`, the returned value
 * will be identical to the original as it is serialized before saving
 * it in the database:
 *
 *     array(3) {
 *         [0] => bool(false)
 *         [1] => string(3) "str"
 *         [2] => NULL
 *     }
 *
 * @param string $option Name of the option to retrieve. Expected to not be SQL-escaped.
 * @param mixed $default Optional. Default value to return if the option does not exist.
 * @return mixed Value of the option. A value of any type may be returned, including
 *               scalar (string, boolean, float, integer), null, array, object.
 *               Scalar and null values will be returned as strings as long as they originate
 *               from a database stored option value. If there is no option in the database,
 *               boolean `false` is returned.
 */
function get_option( $option, $default = FALSE )
{
	if ( is_scalar( $option ) )
	{
		$option = trim( $option );
	}
	
	if ( empty( $option ) )
	{
		return FALSE;
	}
	
	/*
	 * Until a proper _deprecated_option() function can be introduced,
	 * redirect requests to deprecated keys to the new, correct ones.
	 */
	$deprecated_keys = [];
	
	if ( isset( $deprecated_keys[ $option ] ) )
	{
		return get_option( $deprecated_keys[ $option ], $default );
	}
	
	// Distinguish between `false` as a default, and not passing one.
	$passed_default = func_num_args() > 1;
	
	// Prevent non-existent options from triggering multiple queries.
	$notoptions = ci_cache_get( 'notoptions', 'options' );
	
	// Prevent non-existent `notoptions` key from triggering multiple key lookups.
	if ( ! is_array( $notoptions ) )
	{
		$notoptions = [];
		ci_cache_set( 'notoptions', $notoptions, 'options' );
	}
	
	$alloptions = ci_load_alloptions();
	
	if ( isset( $alloptions[ $option ] ) )
	{
		$value = $alloptions[ $option ];
	}
	else
	{
		$value = ci_cache_get( $option, 'options' );
		
		if ( FALSE === $value )
		{
			$row = get_instance()->options_model->get_by( [ 'option_name' => $option ] );
			
			// Has to be get_row() instead of get_var() because of funkiness with 0, false, null values.
			if ( is_object( $row ) )
			{
				$value = $row->option_value;
				ci_cache_add( $option, $value, 'options' );
			}
			else
			{ // Option does not exist, so we must cache its non-existence.
				if ( ! is_array( $notoptions ) )
				{
					$notoptions = [];
				}
				
				$notoptions[ $option ] = TRUE;
				ci_cache_set( 'notoptions', $notoptions, 'options' );
				
				return $default;
			}
		}
	}
	
	return maybe_unserialize( $value );
}

/**
 * Updates the value of an option that was already added.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * If the option does not exist, it will be created.
 * This function is designed to work with or without a logged-in user. In terms of security,
 * plugin developers should check the current user's capabilities before updating any options.
 *
 * @param string $option Name of the option to update. Expected to not be SQL-escaped.
 * @param mixed $value Option value. Must be serializable if non-scalar. Expected to not be SQL-escaped.
 * @param string|bool $autoload Optional. Whether to load the option when WordPress starts up. For existing options,
 *                              `$autoload` can only be updated using `update_option()` if `$value` is also changed.
 *                              Accepts 'yes'|true to enable or 'no'|false to disable. For non-existent options,
 *                              the default value is 'yes'. Default null.
 * @return bool True if the value was updated, false otherwise.
 */
function update_option( $option, $value, $autoload = NULL )
{
	if ( is_scalar( $option ) )
	{
		$option = trim( $option );
	}
	
	if ( empty( $option ) )
	{
		return FALSE;
	}
	
	/*
	 * Until a proper _deprecated_option() function can be introduced,
	 * redirect requests to deprecated keys to the new, correct ones.
	 */
	$deprecated_keys = [];
	
	if ( isset( $deprecated_keys[ $option ] ) )
	{
		return update_option( $deprecated_keys[ $option ], $value, $autoload );
	}
	
	ci_protect_special_option( $option );
	
	if ( is_object( $value ) )
	{
		$value = clone $value;
	}
	
	$old_value = get_option( $option );
	
	/*
	 * If the new and old values are the same, no need to update.
	 *
	 * Unserialized values will be adequate in most cases. If the unserialized
	 * data differs, the (maybe) serialized data is checked to avoid
	 * unnecessary database calls for otherwise identical object instances.
	 *
	 * See https://core.trac.wordpress.org/ticket/38903
	 */
	if ( $value === $old_value || maybe_serialize( $value ) === maybe_serialize( $old_value ) )
	{
		return FALSE;
	}
	
	$serialized_value = maybe_serialize( $value );
	
	$update_args = [
		'option_value' => $serialized_value,
	];
	
	if ( NULL !== $autoload )
	{
		$update_args[ 'autoload' ] = ( 'no' === $autoload || FALSE === $autoload ) ? 'no' : 'yes';
	}
	
	$result = get_instance()->options_model->update( $update_args, [ 'option_name' => $option ] );
	if ( ! $result )
	{
		return FALSE;
	}
	
	$notoptions = ci_cache_get( 'notoptions', 'options' );
	
	if ( is_array( $notoptions ) && isset( $notoptions[ $option ] ) )
	{
		unset( $notoptions[ $option ] );
		ci_cache_set( 'notoptions', $notoptions, 'options' );
	}
	
	$alloptions = ci_load_alloptions( TRUE );
	if ( isset( $alloptions[ $option ] ) )
	{
		$alloptions[ $option ] = $serialized_value;
		ci_cache_set( 'alloptions', $alloptions, 'options' );
	}
	else
	{
		ci_cache_set( $option, $serialized_value, 'options' );
	}
	
	return TRUE;
}

/**
 * Adds a new option.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * You can create options without values and then update the values later.
 * Existing options will not be updated and checks are performed to ensure that you
 * aren't adding a protected WordPress option. Care should be taken to not name
 * options the same as the ones which are protected.
 *
 * @param string $option Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed $value Optional. Option value. Must be serializable if non-scalar.
 *                                Expected to not be SQL-escaped.
 * @param string $deprecated Optional. Description. Not used anymore.
 * @param string|bool $autoload Optional. Whether to load the option when WordPress starts up.
 *                                Default is enabled. Accepts 'no' to disable for legacy reasons.
 * @return bool True if the option was added, false otherwise.
 */
function add_option( $option, $value = '', $deprecated = '', $autoload = 'yes' )
{
	if ( is_scalar( $option ) )
	{
		$option = trim( $option );
	}
	
	if ( empty( $option ) )
	{
		return FALSE;
	}
	
	/*
	 * Until a proper _deprecated_option() function can be introduced,
	 * redirect requests to deprecated keys to the new, correct ones.
	 */
	$deprecated_keys = [];
	
	if ( isset( $deprecated_keys[ $option ] ) )
	{
		return add_option( $deprecated_keys[ $option ], $value, $deprecated, $autoload );
	}
	
	ci_protect_special_option( $option );
	
	if ( is_object( $value ) )
	{
		$value = clone $value;
	}
	
	// Make sure the option doesn't already exist.
	// We can check the 'notoptions' cache before we ask for a DB query.
	$notoptions = ci_cache_get( 'notoptions', 'options' );
	
	if ( ! is_array( $notoptions ) || ! isset( $notoptions[ $option ] ) )
	{
		return FALSE;
	}
	
	$serialized_value = maybe_serialize( $value );
	$autoload = ( 'no' === $autoload || FALSE === $autoload ) ? 'no' : 'yes';
	
	$result = get_instance()->options_model->create( [
		'option_name'  => $option,
		'option_value' => $serialized_value,
		'autoload'     => $autoload,
	] );
	if ( ! $result )
	{
		return FALSE;
	}
	
	if ( 'yes' === $autoload )
	{
		$alloptions = ci_load_alloptions( TRUE );
		$alloptions[ $option ] = $serialized_value;
		ci_cache_set( 'alloptions', $alloptions, 'options' );
	}
	else
	{
		ci_cache_set( $option, $serialized_value, 'options' );
	}
	
	// This option exists now.
	$notoptions = ci_cache_get( 'notoptions', 'options' ); // Yes, again... we need it to be fresh.
	
	if ( is_array( $notoptions ) && isset( $notoptions[ $option ] ) )
	{
		unset( $notoptions[ $option ] );
		ci_cache_set( 'notoptions', $notoptions, 'options' );
	}
	
	return TRUE;
}

/**
 * Removes option by name. Prevents removal of protected WordPress options.
 *
 * @param string $option Name of the option to delete. Expected to not be SQL-escaped.
 * @return bool True if the option was deleted, false otherwise.
 */
function delete_option( $option )
{
	if ( is_scalar( $option ) )
	{
		$option = trim( $option );
	}
	
	if ( empty( $option ) )
	{
		return FALSE;
	}
	
	ci_protect_special_option( $option );
	
	// Get the ID, if no ID then return.
	$row = get_instance()->options_model->get_by( [ 'option_name' => $option ] );
	if ( is_null( $row ) )
	{
		return FALSE;
	}
	
	$result = get_instance()->options_model->delete( $option );
	if ( ! $result )
	{
		return FALSE;
	}
	
	
	return FALSE;
}

/**
 * Loads and caches all autoloaded options, if available or all options.
 *
 * @param bool $force_cache Optional. Whether to force an update of the local cache
 *                          from the persistent cache. Default false.
 * @return array List of all options.
 */
function ci_load_alloptions( $force_cache = FALSE )
{
	$alloptions = ci_cache_get( 'alloptions', 'options', $force_cache );
	
	if ( ! $alloptions )
	{
		$alloptions_db = get_instance()->options_model->get_all( [ 'autoload' => 'yes' ] );
		if ( ! $alloptions_db )
		{
			$alloptions_db = get_instance()->options_model->get_all();
		}
		
		$alloptions = [];
		foreach ( (array) $alloptions_db as $option )
		{
			$alloptions[ $option->option_name ] = $option->option_value;
		}
		
		ci_cache_add( 'alloptions', $alloptions, 'options' );
	}
	
	return $alloptions;
}

/**
 * Protects special option from being modified.
 *
 * Will die if $option is in protected list. Protected options are 'alloptions'
 * and 'notoptions' options.
 *
 * @param string $option Option name.
 */
function ci_protect_special_option( $option )
{
	if ( 'alloptions' === $option || 'notoptions' === $option )
	{
		die( "{$option} is a protected WP option and may not be modified." );
	}
}