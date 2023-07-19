<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Core User Role & Capabilities API
 *
 * @package Codeigniter
 * @subpackage Users
 */

/**
 * Maps a capability to the primitive capabilities required of the given user to
 * satisfy the capability being checked.
 *
 * This function also accepts an ID of an object to map against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by this function to map to primitive
 * capabilities that a user or role requires, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     map_meta_cap( 'edit_posts', $user->ID );
 *     map_meta_cap( 'edit_post', $user->ID, $post->ID );
 *     map_meta_cap( 'edit_post_meta', $user->ID, $post->ID, $meta_key );
 *
 * This function does not check whether the user has the required capabilities,
 * it just returns what the required capabilities are.
 *
 * @param string $cap Capability being checked.
 * @param int $user_id User ID.
 * @param mixed ...$args Optional further parameters, typically starting with an object ID.
 * @return string[] Primitive capabilities required of the user.
 */
function map_meta_cap( $cap, $user_id, ...$args )
{
	$caps = [];
	switch ( $cap )
	{
		default:
			$caps[] = $cap;
	}
	
	return $caps;
}

/**
 * Returns whether the current user has the specified capability.
 *
 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     current_user_can( 'edit_posts' );
 *     current_user_can( 'edit_post', $post->ID );
 *     current_user_can( 'edit_post_meta', $post->ID, $meta_key );
 *
 * While checking against particular roles in place of a capability is supported
 * in part, this practice is discouraged as it may produce unreliable results.
 *
 * Note: Will always return true if the current user is a super admin, unless specifically denied.
 *
 * @param string $capability Capability name.
 * @param mixed ...$args Optional further parameters, typically starting with an object ID.
 * @return bool Whether the current user has the given capability. If `$capability` is a meta cap and `$object_id` is
 *              passed, whether the current user has the given meta capability for the given object.
 * @see CI_User::has_cap()
 * @see map_meta_cap()
 *
 */
function current_user_can( $capability, ...$args )
{
	return user_can( ci_get_current_user(), $capability, ...$args );
}

/**
 * Returns whether a particular user has the specified capability.
 *
 * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
 * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     user_can( $user->ID, 'edit_posts' );
 *     user_can( $user->ID, 'edit_post', $post->ID );
 *     user_can( $user->ID, 'edit_post_meta', $post->ID, $meta_key );
 *
 * @param int|CI_User $user User ID or object.
 * @param string $capability Capability name.
 * @param mixed ...$args Optional further parameters, typically starting with an object ID.
 * @return bool Whether the user has the given capability.
 */
function user_can( $user, $capability, ...$args )
{
	if ( ! is_object( $user ) )
	{
		$user = get_userdata( $user );
	}
	
	if ( empty( $user ) )
	{
		// User is logged out, create anonymous user object.
		$user = new CI_User( 0 );
		$user->init( new stdClass );
	}
	
	return $user->has_cap( $capability, ...$args );
}

/**
 * Retrieves the global CI_Roles instance and instantiates it if necessary.
 *
 * @return CI_Roles CI_Roles global instance if not already instantiated.
 * @global CI_Roles $ci_roles WordPress role management object.
 */
function ci_roles()
{
	global $ci_roles;
	
	if ( ! isset( $ci_roles ) )
	{
		$ci_roles = new CI_Roles();
	}
	return $ci_roles;
}

/**
 * Retrieves role object.
 *
 * @param string $role Role name.
 * @return CI_Role|null CI_Role object if found, null if the role does not exist.
 */
function get_role( $role )
{
	return ci_roles()->get_role( $role );
}

/**
 * Adds a role, if it does not exist.
 *
 * @param string $role Role name.
 * @param string $display_name Display name for role.
 * @param bool[] $capabilities List of capabilities keyed by the capability name,
 *                             e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
 * @return CI_Role|void CI_Role object, if the role is added.
 */
function add_role( $role, $display_name, $capabilities = [] )
{
	if ( empty( $role ) )
	{
		return;
	}
	
	return ci_roles()->add_role( $role, $display_name, $capabilities );
}

/**
 * Removes a role, if it exists.
 *
 * @param string $role Role name.
 */
function remove_role( $role )
{
	ci_roles()->remove_role( $role );
}

/**
 * Retrieves a list of super admins.
 *
 * @return string[] List of super admin logins.
 * @global array $super_admins
 */
function get_super_admins()
{
	global $super_admins;
	
	if ( isset( $super_admins ) )
	{
		return $super_admins;
	}
	return [ 'admin' ];
}

/**
 * Determines whether user is a site admin.
 *
 * @param int|false $user_id Optional. The ID of a user. Defaults to false, to check the current user.
 * @return bool Whether the user is a site admin.
 */
function is_super_admin( $user_id = FALSE )
{
	if ( ! $user_id )
	{
		$user = ci_get_current_user();
	}
	else
	{
		$user = get_userdata( $user_id );
	}
	
	if ( ! $user || ! $user->exists() )
	{
		return FALSE;
	}
	
	$super_admins = get_super_admins();
	if ( is_array( $super_admins ) && in_array( $user->user_login, $super_admins, TRUE ) )
	{
		return TRUE;
	}
	
	return FALSE;
}