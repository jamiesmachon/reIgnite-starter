<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/**
 * User API: CI_User class
 *
 * @package Codeigniter
 * @subpackage Users
 */

/**
 * Core class used to implement the CI_User object.
 *
 * @property string $nickname
 * @property string $description
 * @property string $user_description
 * @property string $first_name
 * @property string $user_firstname
 * @property string $last_name
 * @property string $user_lastname
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property string $user_registered
 * @property string $user_activation_key
 * @property string $user_status
 * @property int $user_level
 * @property string $display_name
 * @property string $spam
 * @property string $deleted
 * @property string $locale
 * @property string $rich_editing
 * @property string $syntax_highlighting
 * @property string $use_ssl
 */
#[AllowDynamicProperties]
class CI_User {
	
	/**
	 * User data container.
	 *
	 * @var stdClass
	 */
	public $data;
	
	/**
	 * The user's ID.
	 *
	 * @var int
	 */
	public $ID = 0;
	
	/**
	 * Capabilities that the individual user has been granted outside of those inherited from their role.
	 *
	 * @var bool[] Array of key/value pairs where keys represent a capability name
	 *             and boolean values represent whether the user has that capability.
	 */
	public $caps = [];
	
	/**
	 * User metadata option name.
	 *
	 * @var string
	 */
	public $cap_key;
	
	/**
	 * The roles the user is part of.
	 *
	 * @var string[]
	 */
	public $roles = [];
	
	/**
	 * All capabilities the user has, including individual and role based.
	 *
	 * @var bool[] Array of key/value pairs where keys represent a capability name
	 *             and boolean values represent whether the user has that capability.
	 */
	public $allcaps = [];
	
	/**
	 * Constructor.
	 *
	 * Retrieves the userdata and passes it to CI_User::init().
	 *
	 * @param int|string|stdClass|CI_User $id User's ID, a CI_User object, or a user object from the DB.
	 * @param string $name Optional. User's username
	 * @param int $site_id Optional Site ID, defaults to current site.
	 */
	public function __construct( $id = 0, $name = '', $site_id = '' )
	{
		if ( $id instanceof CI_User )
		{
			$this->init( $id->data );
			return;
		}
		elseif ( is_object( $id ) )
		{
			$this->init( $id );
			return;
		}
		
		if ( ! empty( $id ) && ! is_numeric( $id ) )
		{
			$name = $id;
			$id = 0;
		}
		
		if ( $id )
		{
			$data = self::get_data_by( 'id', $id );
		}
		else
		{
			$data = self::get_data_by( 'login', $name );
		}
		
		if ( $data )
		{
			$this->init( $data );
		}
		else
		{
			$this->data = new stdClass;
		}
	}
	
	/**
	 * Sets up object properties, including capabilities.
	 *
	 * @param object $data User DB row object.
	 */
	public function init( $data )
	{
		if ( ! isset( $data->ID ) )
		{
			$data->ID = 0;
		}
		$this->data = $data;
		$this->ID = (int) $data->ID;
		
		$this->for_site();
	}
	
	/**
	 * Returns only the main user fields.
	 *
	 * @param string $field The field to query against: 'id', 'ID', 'slug', 'email' or 'login'.
	 * @param string|int $value The field value.
	 * @return object|false Raw user object.
	 */
	public static function get_data_by( $field, $value )
	{
		// 'ID' is an alias of 'id'.
		if ( 'ID' === $field )
		{
			$field = 'id';
		}
		
		if ( 'id' === $field )
		{
			// Make sure the value is numeric to avoid casting objects, for example,
			// to int 1.
			if ( ! is_numeric( $value ) )
			{
				return FALSE;
			}
			$value = (int) $value;
			if ( $value < 1 )
			{
				return FALSE;
			}
		}
		else
		{
			$value = trim( $value );
		}
		
		if ( ! $value )
		{
			return FALSE;
		}
		
		switch ( $field )
		{
			case 'id':
				$user_id = $value;
				$db_field = 'ID';
				break;
			case 'slug':
				$user_id = ci_cache_get( $value, 'userslugs' );
				$db_field = 'user_nicename';
				break;
			case 'email':
				$user_id = ci_cache_get( $value, 'useremail' );
				$db_field = 'user_email';
				break;
			case 'login':
				$value = $value;
				$user_id = ci_cache_get( $value, 'userlogins' );
				$db_field = 'user_login';
				break;
			default:
				return FALSE;
		}
		
		if ( FALSE !== $user_id )
		{
			$user = ci_cache_get( $user_id, 'users' );
			if ( $user )
			{
				return $user;
			}
		}
		
		// get the user from the database using the users_model where $db_field = $value
		$user = get_instance()->users_model->get_by( [ $db_field => $value ] );
		if ( ! $user )
		{
			return FALSE;
		}
		
		update_user_caches( $user );
		
		return $user;
	}
	
	/**
	 * Magic method for checking the existence of a certain custom field.
	 *
	 * @param string $key User meta key to check if set.
	 * @return bool Whether the given user meta key is set.
	 */
	public function __isset( $key )
	{
		if ( isset( $this->data->$key ) )
		{
			return TRUE;
		}
		
		return metadata_exists( 'user', $this->ID, $key );
	}
	
	/**
	 * Magic method for accessing custom fields.
	 *
	 * @param string $key User meta key to retrieve.
	 * @return mixed Value of the given user meta key (if set). If `$key` is 'id', the user ID.
	 */
	public function __get( $key )
	{
		if ( isset( $this->data->$key ) )
		{
			$value = $this->data->$key;
		}
		else
		{
			$value = get_user_meta( $this->ID, $key, TRUE );
		}
		
		return $value;
	}
	
	/**
	 * Magic method for setting custom user fields.
	 *
	 * This method does not update custom fields in the database. It only stores
	 * the value on the CI_User instance.
	 *
	 * @param string $key User meta key.
	 * @param mixed $value User meta value.
	 */
	public function __set( $key, $value )
	{
		$this->data->$key = $value;
	}
	
	/**
	 * Magic method for unsetting a certain custom field.
	 *
	 * @param string $key User meta key to unset.
	 */
	public function __unset( $key )
	{
		if ( isset( $this->data->$key ) )
		{
			unset( $this->data->$key );
		}
	}
	
	/**
	 * Determines whether the user exists in the database.
	 *
	 * @return bool True if user exists in the database, false if not.
	 */
	public function exists()
	{
		return ! empty( $this->ID );
	}
	
	/**
	 * Retrieves the value of a property or meta key.
	 *
	 * Retrieves from the users and usermeta table.
	 *
	 * @param string $key Property
	 * @return mixed
	 */
	public function get( $key )
	{
		return $this->__get( $key );
	}
	
	/**
	 * Determines whether a property or meta key is set.
	 *
	 * Consults the users and usermeta tables.
	 *
	 * @param string $key Property.
	 * @return bool
	 */
	public function has_prop( $key )
	{
		return $this->__isset( $key );
	}
	
	/**
	 * Returns an array representation.
	 *
	 * @return array Array representation.
	 */
	public function to_array()
	{
		return get_object_vars( $this->data );
	}
	
	/**
	 * Sets up capability object properties.
	 *
	 * Will set the value for the 'cap_key' property to current database table
	 * prefix, followed by 'capabilities'. Will then check to see if the
	 * property matching the 'cap_key' exists and is an array. If so, it will be
	 * used.
	 *
	 * @param string $cap_key Optional capability key
	 */
	protected function _init_caps( $cap_key = '' )
	{
		$this->cap_key = $cap_key;
		
		$this->caps = $this->get_caps_data();
		
		$this->get_role_caps();
	}
	
	/**
	 * Retrieves all of the capabilities of the user's roles, and merges them with
	 * individual user capabilities.
	 *
	 * All of the capabilities of the user's roles are merged with the user's individual
	 * capabilities. This means that the user can be denied specific capabilities that
	 * their role might have, but the user is specifically denied.
	 *
	 * @return bool[] Array of key/value pairs where keys represent a capability name
	 *                and boolean values represent whether the user has that capability.
	 */
	public function get_role_caps()
	{
		$ci_roles = ci_roles();
		
		// Filter out caps that are not role names and assign to $this->roles.
		if ( is_array( $this->caps ) )
		{
			$this->roles = array_filter( array_keys( $this->caps ), [ $ci_roles, 'is_role' ] );
		}
		
		// Build $allcaps from role caps, overlay user's $caps.
		$this->allcaps = [];
		foreach ( (array) $this->roles as $role )
		{
			$the_role = $ci_roles->get_role( $role );
			$this->allcaps = array_merge( (array) $this->allcaps, (array) $the_role->capabilities );
		}
		$this->allcaps = array_merge( (array) $this->allcaps, (array) $this->caps );
		
		return $this->allcaps;
	}
	
	/**
	 * Adds role to user.
	 *
	 * Updates the user's meta data option with capabilities and roles.
	 *
	 * @param string $role Role name.
	 */
	public function add_role( $role )
	{
		if ( empty( $role ) )
		{
			return;
		}
		
		if ( in_array( $role, $this->roles, TRUE ) )
		{
			return;
		}
		
		$this->caps[ $role ] = TRUE;
		update_user_meta( $this->ID, $this->cap_key, $this->caps );
		$this->get_role_caps();
		$this->update_user_level_from_caps();
	}
	
	/**
	 * Removes role from user.
	 *
	 * @param string $role Role name.
	 */
	public function remove_role( $role )
	{
		if ( ! in_array( $role, $this->roles, TRUE ) )
		{
			return;
		}
		
		unset( $this->caps[ $role ] );
		update_user_meta( $this->ID, $this->cap_key, $this->caps );
		$this->get_role_caps();
		$this->update_user_level_from_caps();
	}
	
	/**
	 * Sets the role of the user.
	 *
	 * This will remove the previous roles of the user and assign the user the
	 * new one. You can set the role to an empty string and it will remove all
	 * of the roles from the user.
	 *
	 * @param string $role Role name.
	 */
	public function set_role( $role )
	{
		if ( 1 === count( $this->roles ) && current( $this->roles ) == $role )
		{
			return;
		}
		
		foreach ( (array) $this->roles as $oldrole )
		{
			unset( $this->caps[ $oldrole ] );
		}
		
		$old_roles = $this->roles;
		
		if ( ! empty( $role ) )
		{
			$this->caps[ $role ] = TRUE;
			$this->roles = [ $role => TRUE ];
		}
		else
		{
			$this->roles = [];
		}
		
		update_user_meta( $this->ID, $this->cap_key, $this->caps );
		$this->get_role_caps();
		$this->update_user_level_from_caps();
	}
	
	/**
	 * Chooses the maximum level the user has.
	 *
	 * Will compare the level from the $item parameter against the $max
	 * parameter. If the item is incorrect, then just the $max parameter value
	 * will be returned.
	 *
	 * Used to get the max level based on the capabilities the user has. This
	 * is also based on roles, so if the user is assigned the Administrator role
	 * then the capability 'level_10' will exist and the user will get that
	 * value.
	 *
	 * @param int $max Max level of user.
	 * @param string $item Level capability name.
	 * @return int Max Level.
	 */
	public function level_reduction( $max, $item )
	{
		if ( preg_match( '/^level_(10|[0-9])$/i', $item, $matches ) )
		{
			$level = (int) $matches[ 1 ];
			return max( $max, $level );
		}
		else
		{
			return $max;
		}
	}
	
	/**
	 * Updates the maximum user level for the user.
	 *
	 * Updates the 'user_level' user metadata (includes prefix that is the
	 * database table prefix) with the maximum user level. Gets the value from
	 * the all of the capabilities that the user has.
	 */
	public function update_user_level_from_caps()
	{
		$this->user_level = array_reduce( array_keys( $this->allcaps ), [ $this, 'level_reduction' ], 0 );
		update_user_meta( $this->ID, 'user_level', $this->user_level );
	}
	
	/**
	 * Adds capability and grant or deny access to capability.
	 *
	 * @param string $cap Capability name.
	 * @param bool $grant Whether to grant capability to user.
	 */
	public function add_cap( $cap, $grant = TRUE )
	{
		$this->caps[ $cap ] = $grant;
		update_user_meta( $this->ID, $this->cap_key, $this->caps );
		$this->get_role_caps();
		$this->update_user_level_from_caps();
	}
	
	/**
	 * Removes capability from user.
	 *
	 * @param string $cap Capability name.
	 */
	public function remove_cap( $cap )
	{
		if ( ! isset( $this->caps[ $cap ] ) )
		{
			return;
		}
		unset( $this->caps[ $cap ] );
		update_user_meta( $this->ID, $this->cap_key, $this->caps );
		$this->get_role_caps();
		$this->update_user_level_from_caps();
	}
	
	/**
	 * Removes all of the capabilities of the user.
	 */
	public function remove_all_caps()
	{
		$this->caps = [];
		delete_user_meta( $this->ID, $this->cap_key );
		delete_user_meta( $this->ID, 'user_level' );
		$this->get_role_caps();
	}
	
	/**
	 * Returns whether the user has the specified capability.
	 *
	 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
	 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
	 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
	 *
	 * Example usage:
	 *
	 *     $user->has_cap( 'edit_posts' );
	 *     $user->has_cap( 'edit_post', $post->ID );
	 *     $user->has_cap( 'edit_post_meta', $post->ID, $meta_key );
	 *
	 * While checking against a role in place of a capability is supported in part, this practice is discouraged as it
	 * may produce unreliable results.
	 *
	 * @param string $cap Capability name.
	 * @param mixed ...$args Optional further parameters, typically starting with an object ID.
	 * @return bool Whether the user has the given capability, or, if an object ID is passed, whether the user has
	 *              the given capability for that object.
	 * @see map_meta_cap()
	 */
	public function has_cap( $cap, ...$args )
	{
		$caps = map_meta_cap( $cap, $this->ID, ...$args );
		
		// Multisite super admin has all caps by definition, Unless specifically denied.
		if ( is_super_admin( $this->ID ) )
		{
			if ( in_array( 'do_not_allow', $caps, TRUE ) )
			{
				return FALSE;
			}
			return TRUE;
		}
		
		// Everyone is allowed to exist.
		$capabilities[ 'exist' ] = TRUE;
		
		// Nobody is allowed to do things they are not allowed to do.
		unset( $capabilities[ 'do_not_allow' ] );
		
		// Must have ALL requested caps.
		foreach ( (array) $caps as $cap )
		{
			if ( empty( $capabilities[ $cap ] ) )
			{
				return FALSE;
			}
		}
		
		return TRUE;
	}
	
	/**
	 * Converts numeric level to level capability name.
	 *
	 * Prepends 'level_' to level number.
	 *
	 * @param int $level Level number, 1 to 10.
	 * @return string
	 */
	public function translate_level_to_cap( $level )
	{
		return 'level_' . $level;
	}
	
	/**
	 * Sets the site to operate on. Defaults to the current site.
	 */
	public function for_site()
	{
		$this->cap_key = 'capabilities';
		
		$this->caps = $this->get_caps_data();
		
		$this->get_role_caps();
	}
	
	/**
	 * Gets the available user capabilities data.
	 *
	 * @return bool[] List of capabilities keyed by the capability name,
	 *                e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
	 */
	private function get_caps_data()
	{
		$caps = get_user_meta( $this->ID, $this->cap_key, TRUE );
		
		if ( ! is_array( $caps ) )
		{
			return [];
		}
		
		return $caps;
	}
}
