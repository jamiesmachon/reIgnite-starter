<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Retrieves the current user object.
 *
 * Will set the current user, if the current user is not set. The current user
 * will be set to the logged-in person. If no user is logged-in, then it will
 * set the current user to 0, which is invalid and won't have any permissions.
 *
 * @return CI_User Current CI_User instance.
 * @see ci_get_current_user()
 * @global CI_User $current_user Checks if the current user is set.
 *
 * @access private
 */
function _ci_get_current_user()
{
	$current_user = get_instance()->session->userdata( 'current_user' );
	if ( ! empty( $current_user ) )
	{
		if ( $current_user instanceof CI_User )
		{
			return $current_user;
		}
		
		// Upgrade stdClass to CI_User.
		if ( is_object( $current_user ) && isset( $current_user->ID ) )
		{
			$cur_id = $current_user->ID;
			$current_user = NULL;
			return ci_set_current_user( $cur_id );
		}
	}
	
	// $current_user has a junk value. Force to CI_User with ID 0.
	return ci_set_current_user( 0 );
}

/**
 * Retrieves the current user object.
 *
 * Will set the current user, if the current user is not set. The current user
 * will be set to the logged-in person. If no user is logged-in, then it will
 * set the current user to 0, which is invalid and won't have any permissions.
 *
 * @return CI_User Current CI_User instance.
 * @see _ci_get_current_user()
 * @global CI_User $current_user Checks if the current user is set.
 */
function ci_get_current_user()
{
	return _ci_get_current_user();
}

/**
 * Changes the current user by ID or name.
 *
 * Set $id to null and specify a name if you do not know a user's ID.
 *
 * Some functionality is based on the current user and not based on
 * the signed in user. Therefore, it opens the ability to edit and perform
 * actions on users who aren't signed in.
 *
 * @param int|null $id User ID.
 * @param string $name User's username.
 * @return CI_User Current user User object.
 */
function ci_set_current_user( $id, $name = '' )
{
	$current_user = get_instance()->session->userdata( 'current_user' );
	
	// If `$id` matches the current user, there is nothing to do.
	if ( isset( $current_user ) && ( $current_user instanceof CI_User ) && ( $id == $current_user->ID ) && ( NULL !== $id ) )
	{
		return $current_user;
	}
	
	$current_user = new CI_User( $id, $name );
	
	setup_userdata( $current_user->ID );
	
	return $current_user;
}

/**
 * Gets the current user's ID.
 *
 * @return int The current user's ID, or 0 if no user is logged in.
 */
function get_current_user_id()
{
	if ( ! function_exists( 'ci_get_current_user' ) )
	{
		return 0;
	}
	$user = ci_get_current_user();
	return ( isset( $user->ID ) ? (int) $user->ID : 0 );
}

/**
 * Updates all user caches.
 *
 * @param object|CI_User $user User object or database row to be cached
 * @return void|false Void on success, false on failure.
 */
function update_user_caches( $user )
{
	if ( $user instanceof CI_User )
	{
		if ( ! $user->exists() )
		{
			return FALSE;
		}
		
		$user = $user->data;
	}
	
	ci_cache_add( $user->ID, $user, 'users' );
	ci_cache_add( $user->user_login, $user->ID, 'userlogins' );
	ci_cache_add( $user->user_nicename, $user->ID, 'userslugs' );
	
	if ( ! empty( $user->user_email ) )
	{
		ci_cache_add( $user->user_email, $user->ID, 'useremail' );
	}
}

/**
 * Sets up global user vars.
 *
 * Used by ci_set_current_user() for back compat. Might be deprecated in the future.
 *
 * @param int $for_user_id Optional. User ID to set up global data. Default 0.
 * @global string $user_login The user username for logging in
 * @global CI_User $userdata User data.
 * @global int $user_level The level of the user
 * @global int $user_ID The ID of the user
 * @global string $user_email The email address of the user
 * @global string $user_url The url in the user's profile
 * @global string $user_identity The display name of the user
 */
function setup_userdata( $for_user_id = 0 )
{
	global $user_login, $userdata, $user_level, $user_ID, $user_email, $user_url, $user_identity;
	
	if ( ! $for_user_id )
	{
		$for_user_id = get_current_user_id();
	}
	$user = get_userdata( $for_user_id );
	
	if ( ! $user )
	{
		$user_ID = 0;
		$user_level = 0;
		$userdata = NULL;
		$user_login = '';
		$user_email = '';
		$user_url = '';
		$user_identity = '';
		return;
	}
	
	$user_ID = (int) $user->ID;
	$user_level = (int) $user->user_level;
	$userdata = $user;
	$user_login = $user->user_login;
	$user_email = $user->user_email;
	$user_url = $user->user_url;
	$user_identity = $user->display_name;
	
	get_instance()->session->set_userdata( 'current_user', $user );
}

/**
 * Determines whether the current visitor is a logged in user.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @return bool True if user is logged in, false if not logged in.
 */
function is_user_logged_in()
{
	$user = ci_get_current_user();
	
	// return $user->exists();
	return $user;
}

/**
 * Logs the current user out.
 */
function ci_logout()
{
	$user_id = get_current_user_id();
	
	ci_destroy_current_session();
	ci_set_current_user( 0 );
}

/**
 * Retrieves user info by user ID.
 *
 * @param int $user_id User ID
 * @return CI_User|false CI_User object on success, false on failure.
 */
function get_userdata( $user_id )
{
	return get_user_by( 'id', $user_id );
}

/**
 * Retrieves user info by a given field.
 *
 * @param string $field The field to retrieve the user with. id | ID | slug | email | login.
 * @param int|string $value A value for $field. A user ID, slug, email address, or login name.
 * @return CI_User|false CI_User object on success, false on failure.
 */
function get_user_by( $field, $value )
{
	$userdata = CI_User::get_data_by( $field, $value );
	
	if ( ! $userdata )
	{
		return FALSE;
	}
	
	$user = new CI_User;
	$user->init( $userdata );
	
	return $user;
}

/**
 * Adds meta data to a user.
 *
 * @param int $user_id User ID.
 * @param string $meta_key Metadata name.
 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
 * @param bool $unique Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
function add_user_meta( $user_id, $meta_key, $meta_value, $unique = FALSE )
{
	return add_metadata( 'user', $user_id, $meta_key, $meta_value, $unique );
}

/**
 * Removes metadata matching criteria from a user.
 *
 * You can match based on the key, or key and value. Removing based on key and
 * value, will keep from removing duplicate metadata with the same key. It also
 * allows removing all metadata matching key, if needed.
 *
 * @param int $user_id User ID
 * @param string $meta_key Metadata name.
 * @param mixed $meta_value Optional. Metadata value. If provided,
 *                           rows will only be removed that match the value.
 *                           Must be serializable if non-scalar. Default empty.
 * @return bool True on success, false on failure.
 */
function delete_user_meta( $user_id, $meta_key, $meta_value = '' )
{
	return delete_metadata( 'user', $user_id, $meta_key, $meta_value );
}

/**
 * Retrieves user meta field for a user.
 *
 * @param int $user_id User ID.
 * @param string $key Optional. The meta key to retrieve. By default,
 *                        returns data for all keys.
 * @param bool $single Optional. Whether to return a single value.
 *                        This parameter has no effect if `$key` is not specified.
 *                        Default false.
 * @return mixed An array of values if `$single` is false.
 *               The value of meta data field if `$single` is true.
 *               False for an invalid `$user_id` (non-numeric, zero, or negative value).
 *               An empty string if a valid but non-existing user ID is passed.
 */
function get_user_meta( $user_id, $key = '', $single = FALSE )
{
	return get_metadata( 'user', $user_id, $key, $single );
}

/**
 * Updates user meta field based on user ID.
 *
 * Use the $prev_value parameter to differentiate between meta fields with the
 * same key and user ID.
 *
 * If the meta field for the user does not exist, it will be added.
 *
 * @param int $user_id User ID.
 * @param string $meta_key Metadata key.
 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
 * @param mixed $prev_value Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty.
 * @return int|bool Meta ID if the key didn't exist, true on successful update,
 *                  false on failure or if the value passed to the function
 *                  is the same as the one that is already in the database.
 */
function update_user_meta( $user_id, $meta_key, $meta_value, $prev_value = '' )
{
	return update_metadata( 'user', $user_id, $meta_key, $meta_value, $prev_value );
}

/**
 * Removes the current session token from the database.
 */
function ci_destroy_current_session()
{
	get_instance()->session->sess_destroy();
}