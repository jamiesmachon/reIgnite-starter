<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );
/**
 * User API: CI_Role class
 */

/**
 * Core class used to extend the user roles API.
 */
#[AllowDynamicProperties]
class CI_Role {
	/**
	 * Role name.
	 *
	 * @var string
	 */
	public $name;
	
	/**
	 * List of capabilities the role contains.
	 *
	 * @var bool[] Array of key/value pairs where keys represent a capability name and boolean values
	 *             represent whether the role has that capability.
	 */
	public $capabilities;
	
	/**
	 * Constructor - Set up object properties.
	 *
	 * The list of capabilities must have the key as the name of the capability
	 * and the value a boolean of whether it is granted to the role.
	 *
	 * @param string $role Role name.
	 * @param bool[] $capabilities Array of key/value pairs where keys represent a capability name and boolean values
	 *                             represent whether the role has that capability.
	 */
	public function __construct( $role, $capabilities )
	{
		$this->name = $role;
		$this->capabilities = $capabilities;
	}
	
	/**
	 * Assign role a capability.
	 *
	 * @param string $cap Capability name.
	 * @param bool $grant Whether role has capability privilege.
	 */
	public function add_cap( $cap, $grant = TRUE )
	{
		$this->capabilities[ $cap ] = $grant;
		ci_roles()->add_cap( $this->name, $cap, $grant );
	}
	
	/**
	 * Removes a capability from a role.
	 *
	 * @param string $cap Capability name.
	 */
	public function remove_cap( $cap )
	{
		unset( $this->capabilities[ $cap ] );
		ci_roles()->remove_cap( $this->name, $cap );
	}
	
	/**
	 * Determines whether the role has the given capability.
	 *
	 * @param string $cap Capability name.
	 * @return bool Whether the role has the given capability.
	 */
	public function has_cap( $cap )
	{
		$capabilities = $this->capabilities;
		
		if ( ! empty( $capabilities[ $cap ] ) )
		{
			return $capabilities[ $cap ];
		}
		else
		{
			return FALSE;
		}
	}
	
}
