<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Object Cache API
 *
 * @package Codeigniter
 * @subpackage Cache
 */

/** CI_Object_Cache class */
require_once APPPATH . 'core' . DIRECTORY_SEPARATOR . 'CI_Object_Cache.php';

/**
 * Sets up Object Cache Global and assigns it.
 *
 * @global CI_Object_Cache $CI_Object_Cache
 */
function ci_cache_init()
{
	$GLOBALS[ 'CI_Object_Cache' ] = new CI_Object_Cache();
}

/**
 * Adds data to the cache, if the cache key doesn't already exist.
 *
 * @param int|string $key The cache key to use for retrieval later.
 * @param mixed $data The data to add to the cache.
 * @param string $group Optional. The group to add the cache to. Enables the same key
 *                           to be used across groups. Default empty.
 * @param int $expire Optional. When the cache data should expire, in seconds.
 *                           Default 0 (no expiration).
 * @return bool True on success, false if cache key and group already exist.
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 * @see CI_Object_Cache::add()
 */
function ci_cache_add( $key, $data, $group = '', $expire = 0 )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->add( $key, $data, $group, (int) $expire );
}

/**
 * Adds multiple values to the cache in one call.
 *
 * @param array $data Array of keys and values to be set.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param int $expire Optional. When to expire the cache contents, in seconds.
 *                       Default 0 (no expiration).
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false if cache key and group already exist.
 * @see CI_Object_Cache::add_multiple()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_add_multiple( array $data, $group = '', $expire = 0 )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->add_multiple( $data, $group, $expire );
}

/**
 * Replaces the contents of the cache with new data.
 *
 * @param int|string $key The key for the cache data that should be replaced.
 * @param mixed $data The new data to store in the cache.
 * @param string $group Optional. The group for the cache data that should be replaced.
 *                           Default empty.
 * @param int $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool True if contents were replaced, false if original value does not exist.
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 * @see CI_Object_Cache::replace()
 */
function ci_cache_replace( $key, $data, $group = '', $expire = 0 )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->replace( $key, $data, $group, (int) $expire );
}

/**
 * Saves the data to the cache.
 *
 * Differs from ci_cache_add() and ci_cache_replace() in that it will always write data.
 *
 * @param int|string $key The cache key to use for retrieval later.
 * @param mixed $data The contents to store in the cache.
 * @param string $group Optional. Where to group the cache contents. Enables the same key
 *                           to be used across groups. Default empty.
 * @param int $expire Optional. When to expire the cache contents, in seconds.
 *                           Default 0 (no expiration).
 * @return bool True on success, false on failure.
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 * @see CI_Object_Cache::set()
 */
function ci_cache_set( $key, $data, $group = '', $expire = 0 )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->set( $key, $data, $group, (int) $expire );
}

/**
 * Sets multiple values to the cache in one call.
 *
 * @param array $data Array of keys and values to be set.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param int $expire Optional. When to expire the cache contents, in seconds.
 *                       Default 0 (no expiration).
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false on failure.
 * @see CI_Object_Cache::set_multiple()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_set_multiple( array $data, $group = '', $expire = 0 )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->set_multiple( $data, $group, $expire );
}

/**
 * Retrieves the cache contents from the cache by key and group.
 *
 * @param int|string $key The key under which the cache contents are stored.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param bool $force Optional. Whether to force an update of the local cache
 *                          from the persistent cache. Default false.
 * @param bool $found Optional. Whether the key was found in the cache (passed by reference).
 *                          Disambiguates a return of false, a storable value. Default null.
 * @return mixed|false The cache contents on success, false on failure to retrieve contents.
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 * @see CI_Object_Cache::get()
 */
function ci_cache_get( $key, $group = '', $force = FALSE, &$found = NULL )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->get( $key, $group, $force, $found );
}

/**
 * Retrieves multiple values from the cache in one call.
 *
 * @param array $keys Array of keys under which the cache contents are stored.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @param bool $force Optional. Whether to force an update of the local cache
 *                      from the persistent cache. Default false.
 * @return array Array of return values, grouped by key. Each value is either
 *               the cache contents on success, or false on failure.
 * @see CI_Object_Cache::get_multiple()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_get_multiple( $keys, $group = '', $force = FALSE )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->get_multiple( $keys, $group, $force );
}

/**
 * Removes the cache contents matching key and group.
 *
 * @param int|string $key What the contents in the cache are called.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @return bool True on successful removal, false on failure.
 *
 * @see CI_Object_Cache::delete()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 */
function ci_cache_delete( $key, $group = '' )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->delete( $key, $group );
}

/**
 * Deletes multiple values from the cache in one call.
 *
 * @param array $keys Array of keys under which the cache to deleted.
 * @param string $group Optional. Where the cache contents are grouped. Default empty.
 * @return bool[] Array of return values, grouped by key. Each value is either
 *                true on success, or false if the contents were not deleted.
 *
 * @see CI_Object_Cache::delete_multiple()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_delete_multiple( array $keys, $group = '' )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->delete_multiple( $keys, $group );
}

/**
 * Increments numeric cache item's value.
 *
 * @param int|string $key The key for the cache contents that should be incremented.
 * @param int $offset Optional. The amount by which to increment the item's value.
 *                           Default 1.
 * @param string $group Optional. The group the key is in. Default empty.
 * @return int|false The item's new value on success, false on failure.
 * @see CI_Object_Cache::incr()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_incr( $key, $offset = 1, $group = '' )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->incr( $key, $offset, $group );
}

/**
 * Decrements numeric cache item's value.
 *
 * @param int|string $key The cache key to decrement.
 * @param int $offset Optional. The amount by which to decrement the item's value.
 *                           Default 1.
 * @param string $group Optional. The group the key is in. Default empty.
 * @return int|false The item's new value on success, false on failure.
 * @see CI_Object_Cache::decr()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_decr( $key, $offset = 1, $group = '' )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->decr( $key, $offset, $group );
}

/**
 * Removes all cache items.
 *
 * @return bool True on success, false on failure.
 * @see CI_Object_Cache::flush()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_flush()
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->flush();
}

/**
 * Removes all cache items from the in-memory runtime cache.
 *
 * @return bool True on success, false on failure.
 * @see CI_Object_Cache::flush()
 */
function ci_cache_flush_runtime()
{
	return ci_cache_flush();
}

/**
 * Removes all cache items in a group, if the object cache implementation supports it.
 *
 * Before calling this function, always check for group flushing support using the
 * `ci_cache_supports( 'flush_group' )` function.
 *
 * @param string $group Name of group to remove from cache.
 * @return bool True if group was flushed, false otherwise.
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 *
 * @see CI_Object_Cache::flush_group()
 */
function ci_cache_flush_group( $group )
{
	global $CI_Object_Cache;
	
	return $CI_Object_Cache->flush_group( $group );
}

/**
 * Determines whether the object cache implementation supports a particular feature.
 *
 * @param string $feature Name of the feature to check for. Possible values include:
 *                        'add_multiple', 'set_multiple', 'get_multiple', 'delete_multiple',
 *                        'flush_runtime', 'flush_group'.
 * @return bool True if the feature is supported, false otherwise.
 */
function ci_cache_supports( $feature )
{
	switch ( $feature )
	{
		case 'add_multiple':
		case 'set_multiple':
		case 'get_multiple':
		case 'delete_multiple':
		case 'flush_runtime':
		case 'flush_group':
			return TRUE;
		
		default:
			return FALSE;
	}
}

/**
 * Closes the cache.
 *
 * This function has ceased to do anything since WordPress 2.5. The
 * functionality was removed along with the rest of the persistent cache.
 *
 * This does not mean that plugins can't implement this function when they need
 * to make sure that the cache is cleaned up after WordPress no longer needs it.
 *
 * @return true Always returns true.
 */
function ci_cache_close()
{
	return TRUE;
}

/**
 * Adds a group or set of groups to the list of global groups.
 *
 * @param string|string[] $groups A group or an array of groups to add.
 * @see CI_Object_Cache::add_global_groups()
 * @global CI_Object_Cache $CI_Object_Cache Object cache global instance.
 */
function ci_cache_add_global_groups( $groups )
{
	global $CI_Object_Cache;
	
	$CI_Object_Cache->add_global_groups( $groups );
}

/**
 * Adds a group or set of groups to the list of non-persistent groups.
 *
 * @param string|string[] $groups A group or an array of groups to add.
 */
function ci_cache_add_non_persistent_groups( $groups )
{
	// Default cache doesn't persist so nothing to do here.
}