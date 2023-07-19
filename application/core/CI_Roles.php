<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/**
 * User API: CI_Role class
 */

/**
 * Core class used to implement a user roles API.
 *
 * The role option is simple, the structure is organized by role name that store
 * the name in value of the 'name' key. The capabilities are stored as an array
 * in the value of the 'capability' key.
 *
 *     array (
 *          'rolename' => array (
 *              'name' => 'rolename',
 *              'capabilities' => array()
 *          )
 *     )
 */
#[AllowDynamicProperties]
class CI_Roles {
	/**
	 * List of roles and capabilities.
	 *
	 * @var array[]
	 */
	public $roles;
	
	/**
	 * List of the role objects.
	 *
	 * @var CI_Role[]
	 */
	public $role_objects = [];
	
	/**
	 * List of role names.
	 *
	 * @var string[]
	 */
	public $role_names = [];
	
	/**
	 * Option name for storing role list.
	 *
	 * @var string
	 */
	public $role_key;
	
	/**
	 * Whether to use the database for retrieval and storage.
	 *
	 * @var bool
	 */
	public $use_db = TRUE;
	
	/**
	 * Constructor.
	 *
	 * @global array $ci_user_roles Used to set the 'roles' property value.
	 */
	public function __construct()
	{
		global $ci_user_roles;
		
		$this->use_db = empty( $ci_user_roles );
		
		$this->for_site();
	}
	
	/**
	 * Adds a role name with capabilities to the list.
	 *
	 * Updates the list of roles, if the role doesn't already exist.
	 *
	 * The capabilities are defined in the following format: `array( 'read' => true )`.
	 * To explicitly deny the role a capability, set the value for that capability to false.
	 *
	 * @param string $role Role name.
	 * @param string $display_name Role display name.
	 * @param bool[] $capabilities Optional. List of capabilities keyed by the capability name,
	 *                             e.g. `array( 'edit_posts' => true, 'delete_posts' => false )`.
	 *                             Default empty array.
	 * @return CI_Role|void CI_Role object, if the role is added.
	 */
	public function add_role( $role, $display_name, $capabilities = [] )
	{
		if ( empty( $role ) || isset( $this->roles[ $role ] ) )
		{
			return;
		}
		
		$this->roles[ $role ] = [
			'name'         => $display_name,
			'capabilities' => $capabilities,
		];
		if ( $this->use_db )
		{
			update_option( $this->role_key, $this->roles );
		}
		$this->role_objects[ $role ] = new CI_Role( $role, $capabilities );
		$this->role_names[ $role ] = $display_name;
		return $this->role_objects[ $role ];
	}
	
	/**
	 * Removes a role by name.
	 *
	 * @param string $role Role name.
	 */
	public function remove_role( $role )
	{
		if ( ! isset( $this->role_objects[ $role ] ) )
		{
			return;
		}
		
		unset( $this->role_objects[ $role ] );
		unset( $this->role_names[ $role ] );
		unset( $this->roles[ $role ] );
		
		if ( $this->use_db )
		{
			update_option( $this->role_key, $this->roles );
		}
		
		if ( get_option( 'default_role' ) == $role )
		{
			update_option( 'default_role', 'subscriber' );
		}
	}
	
	/**
	 * Adds a capability to role.
	 *
	 * @param string $role Role name.
	 * @param string $cap Capability name.
	 * @param bool $grant Optional. Whether role is capable of performing capability.
	 *                      Default true.
	 */
	public function add_cap( $role, $cap, $grant = TRUE )
	{
		if ( ! isset( $this->roles[ $role ] ) )
		{
			return;
		}
		
		$this->roles[ $role ][ 'capabilities' ][ $cap ] = $grant;
		if ( $this->use_db )
		{
			update_option( $this->role_key, $this->roles );
		}
	}
	
	/**
	 * Removes a capability from role.
	 *
	 * @param string $role Role name.
	 * @param string $cap Capability name.
	 */
	public function remove_cap( $role, $cap )
	{
		if ( ! isset( $this->roles[ $role ] ) )
		{
			return;
		}
		
		unset( $this->roles[ $role ][ 'capabilities' ][ $cap ] );
		if ( $this->use_db )
		{
			update_option( $this->role_key, $this->roles );
		}
	}
	
	/**
	 * Retrieves a role object by name.
	 *
	 * @param string $role Role name.
	 * @return CI_Role|null CI_Role object if found, null if the role does not exist.
	 */
	public function get_role( $role )
	{
		if ( isset( $this->role_objects[ $role ] ) )
		{
			return $this->role_objects[ $role ];
		}
		else
		{
			return NULL;
		}
	}
	
	/**
	 * Retrieves a list of role names.
	 *
	 * @return string[] List of role names.
	 */
	public function get_names()
	{
		return $this->role_names;
	}
	
	/**
	 * Determines whether a role name is currently in the list of available roles.
	 *
	 * @param string $role Role name to look up.
	 * @return bool
	 */
	public function is_role( $role )
	{
		return isset( $this->role_names[ $role ] );
	}
	
	/**
	 * Initializes all of the available roles.
	 */
	public function init_roles()
	{
		if ( empty( $this->roles ) )
		{
			return;
		}
		
		$this->role_objects = [];
		$this->role_names = [];
		foreach ( array_keys( $this->roles ) as $role )
		{
			$this->role_objects[ $role ] = new CI_Role( $role, $this->roles[ $role ][ 'capabilities' ] );
			$this->role_names[ $role ] = $this->roles[ $role ][ 'name' ];
		}
	}
	
	/**
	 * Sets the site to operate on. Defaults to the current site.
	 */
	public function for_site()
	{
		$this->role_key = 'user_roles';
		
		if ( ! empty( $this->roles ) && ! $this->use_db )
		{
			return;
		}
		
		$this->roles = $this->get_roles_data();
		
		$this->init_roles();
	}
	
	/**
	 * Gets the available roles data.
	 *
	 * @return array Roles array.
	 * @global array $ci_user_roles Used to set the 'roles' property value.
	 */
	protected function get_roles_data()
	{
		global $ci_user_roles;
		
		if ( ! empty( $ci_user_roles ) )
		{
			return $ci_user_roles;
		}
		
		return get_option( $this->role_key, [] );
	}
}
