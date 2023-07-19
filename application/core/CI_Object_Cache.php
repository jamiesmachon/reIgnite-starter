<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * Object Cache API: CI_Object_Cache class
 *
 * @package Codeigniter
 * @subpackage Cache
 */

/**
 * Core class that implements an object cache.
 *
 * The WordPress Object Cache is used to save on trips to the database. The
 * Object Cache stores all of the cache data to memory and makes the cache
 * contents available by using a key, which is used to name and later retrieve
 * the cache contents.
 *
 * The Object Cache can be replaced by other caching mechanisms by placing files
 * in the wp-content folder which is looked at in wp-settings. If that file
 * exists, then this file will not be included.
 */
#[AllowDynamicProperties]
class CI_Object_Cache {
	
	/**
	 * Holds the cached objects.
	 *
	 * @var array
	 */
	private $cache = [];
	
	/**
	 * The amount of times the cache data was already stored in the cache.
	 *
	 * @var int
	 */
	public $cache_hits = 0;
	
	/**
	 * Amount of times the cache did not have the request in cache.
	 *
	 * @var int
	 */
	public $cache_misses = 0;
	
	/**
	 * List of global cache groups.
	 *
	 * @var string[]
	 */
	protected $global_groups = [];
	
	/**
	 * Sets up object properties; PHP 5 style constructor.
	 */
	public function __construct()
	{
	}
	
	/**
	 * Makes private properties readable for backward compatibility.
	 *
	 * @param string $name Property to get.
	 * @return mixed Property.
	 */
	public function __get( $name )
	{
		return $this->$name;
	}
	
	/**
	 * Makes private properties settable for backward compatibility.
	 *
	 * @param string $name Property to set.
	 * @param mixed $value Property value.
	 * @return mixed Newly-set property.
	 */
	public function __set( $name, $value )
	{
		return $this->$name = $value;
	}
	
	/**
	 * Makes private properties checkable for backward compatibility.
	 *
	 * @param string $name Property to check if set.
	 * @return bool Whether the property is set.
	 */
	public function __isset( $name )
	{
		return isset( $this->$name );
	}
	
	/**
	 * Makes private properties un-settable for backward compatibility.
	 *
	 * @param string $name Property to unset.
	 */
	public function __unset( $name )
	{
		unset( $this->$name );
	}
	
	/**
	 * Serves as a utility function to determine whether a key is valid.
	 *
	 * @param int|string $key Cache key to check for validity.
	 * @return bool Whether the key is valid.
	 */
	protected function is_valid_key( $key )
	{
		if ( is_int( $key ) )
		{
			return TRUE;
		}
		
		if ( is_string( $key ) && trim( $key ) !== '' )
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	/**
	 * Serves as a utility function to determine whether a key exists in the cache.
	 *
	 * @param int|string $key Cache key to check for existence.
	 * @param string $group Cache group for the key existence check.
	 * @return bool Whether the key exists in the cache for the given group.
	 */
	protected function _exists( $key, $group )
	{
		return isset( $this->cache[ $group ] ) && ( isset( $this->cache[ $group ][ $key ] ) || array_key_exists( $key, $this->cache[ $group ] ) );
	}
	
	/**
	 * Adds data to the cache if it doesn't already exist.
	 *
	 * @param int|string $key What to call the contents in the cache.
	 * @param mixed $data The contents to store in the cache.
	 * @param string $group Optional. Where to group the cache contents. Default 'default'.
	 * @param int $expire Optional. When to expire the cache contents, in seconds.
	 *                           Default 0 (no expiration).
	 * @return bool True on success, false if cache key and group already exist.
	 * @uses CI_Object_Cache::set()     Sets the data after the checking the cache
	 *                                  contents existence.
	 *
	 * @uses CI_Object_Cache::_exists() Checks to see if the cache already has data.
	 */
	public function add( $key, $data, $group = 'default', $expire = 0 )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		$id = $key;
		if ( $this->_exists( $id, $group ) )
		{
			return FALSE;
		}
		
		return $this->set( $key, $data, $group, (int) $expire );
	}
	
	/**
	 * Adds multiple values to the cache in one call.
	 *
	 * @param array $data Array of keys and values to be added.
	 * @param string $group Optional. Where the cache contents are grouped. Default empty.
	 * @param int $expire Optional. When to expire the cache contents, in seconds.
	 *                       Default 0 (no expiration).
	 * @return bool[] Array of return values, grouped by key. Each value is either
	 *                true on success, or false if cache key and group already exist.
	 */
	public function add_multiple( array $data, $group = '', $expire = 0 )
	{
		$values = [];
		
		foreach ( $data as $key => $value )
		{
			$values[ $key ] = $this->add( $key, $value, $group, $expire );
		}
		
		return $values;
	}
	
	/**
	 * Replaces the contents in the cache, if contents already exist.
	 *
	 * @param int|string $key What to call the contents in the cache.
	 * @param mixed $data The contents to store in the cache.
	 * @param string $group Optional. Where to group the cache contents. Default 'default'.
	 * @param int $expire Optional. When to expire the cache contents, in seconds.
	 *                           Default 0 (no expiration).
	 * @return bool True if contents were replaced, false if original value does not exist.
	 * @see CI_Object_Cache::set()
	 */
	public function replace( $key, $data, $group = 'default', $expire = 0 )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		$id = $key;
		if ( ! $this->_exists( $id, $group ) )
		{
			return FALSE;
		}
		
		return $this->set( $key, $data, $group, (int) $expire );
	}
	
	/**
	 * Sets the data contents into the cache.
	 *
	 * The cache contents are grouped by the $group parameter followed by the
	 * $key. This allows for duplicate IDs in unique groups. Therefore, naming of
	 * the group should be used with care and should follow normal function
	 * naming guidelines outside of core WordPress usage.
	 *
	 * The $expire parameter is not used, because the cache will automatically
	 * expire for each time a page is accessed and PHP finishes. The method is
	 * more for cache plugins which use files.
	 *
	 * @param int|string $key What to call the contents in the cache.
	 * @param mixed $data The contents to store in the cache.
	 * @param string $group Optional. Where to group the cache contents. Default 'default'.
	 * @param int $expire Optional. Not used.
	 * @return bool True if contents were set, false if key is invalid.
	 */
	public function set( $key, $data, $group = 'default', $expire = 0 )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		if ( is_object( $data ) )
		{
			$data = clone $data;
		}
		
		$this->cache[ $group ][ $key ] = $data;
		return TRUE;
	}
	
	/**
	 * Sets multiple values to the cache in one call.
	 *
	 * @param array $data Array of key and value to be set.
	 * @param string $group Optional. Where the cache contents are grouped. Default empty.
	 * @param int $expire Optional. When to expire the cache contents, in seconds.
	 *                       Default 0 (no expiration).
	 * @return bool[] Array of return values, grouped by key. Each value is always true.
	 */
	public function set_multiple( array $data, $group = '', $expire = 0 )
	{
		$values = [];
		
		foreach ( $data as $key => $value )
		{
			$values[ $key ] = $this->set( $key, $value, $group, $expire );
		}
		
		return $values;
	}
	
	/**
	 * Retrieves the cache contents, if it exists.
	 *
	 * The contents will be first attempted to be retrieved by searching by the
	 * key in the cache group. If the cache is hit (success) then the contents
	 * are returned.
	 *
	 * On failure, the number of cache misses will be incremented.
	 *
	 * @param int|string $key The key under which the cache contents are stored.
	 * @param string $group Optional. Where the cache contents are grouped. Default 'default'.
	 * @param bool $force Optional. Unused. Whether to force an update of the local cache
	 *                          from the persistent cache. Default false.
	 * @param bool $found Optional. Whether the key was found in the cache (passed by reference).
	 *                          Disambiguates a return of false, a storable value. Default null.
	 * @return mixed|false The cache contents on success, false on failure to retrieve contents.
	 */
	public function get( $key, $group = 'default', $force = FALSE, &$found = NULL )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		if ( $this->_exists( $key, $group ) )
		{
			$found = TRUE;
			$this->cache_hits += 1;
			if ( is_object( $this->cache[ $group ][ $key ] ) )
			{
				return clone $this->cache[ $group ][ $key ];
			}
			else
			{
				return $this->cache[ $group ][ $key ];
			}
		}
		
		$found = FALSE;
		$this->cache_misses += 1;
		return FALSE;
	}
	
	/**
	 * Retrieves multiple values from the cache in one call.
	 *
	 * @param array $keys Array of keys under which the cache contents are stored.
	 * @param string $group Optional. Where the cache contents are grouped. Default 'default'.
	 * @param bool $force Optional. Whether to force an update of the local cache
	 *                      from the persistent cache. Default false.
	 * @return array Array of return values, grouped by key. Each value is either
	 *               the cache contents on success, or false on failure.
	 */
	public function get_multiple( $keys, $group = 'default', $force = FALSE )
	{
		$values = [];
		
		foreach ( $keys as $key )
		{
			$values[ $key ] = $this->get( $key, $group, $force );
		}
		
		return $values;
	}
	
	/**
	 * Removes the contents of the cache key in the group.
	 *
	 * If the cache key does not exist in the group, then nothing will happen.
	 *
	 * @param int|string $key What the contents in the cache are called.
	 * @param string $group Optional. Where the cache contents are grouped. Default 'default'.
	 * @param bool $deprecated Optional. Unused. Default false.
	 * @return bool True on success, false if the contents were not deleted.
	 */
	public function delete( $key, $group = 'default', $deprecated = FALSE )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		if ( ! $this->_exists( $key, $group ) )
		{
			return FALSE;
		}
		
		unset( $this->cache[ $group ][ $key ] );
		return TRUE;
	}
	
	/**
	 * Deletes multiple values from the cache in one call.
	 *
	 * @param array $keys Array of keys to be deleted.
	 * @param string $group Optional. Where the cache contents are grouped. Default empty.
	 * @return bool[] Array of return values, grouped by key. Each value is either
	 *                true on success, or false if the contents were not deleted.
	 */
	public function delete_multiple( array $keys, $group = '' )
	{
		$values = [];
		
		foreach ( $keys as $key )
		{
			$values[ $key ] = $this->delete( $key, $group );
		}
		
		return $values;
	}
	
	/**
	 * Increments numeric cache item's value.
	 *
	 * @param int|string $key The cache key to increment.
	 * @param int $offset Optional. The amount by which to increment the item's value.
	 *                           Default 1.
	 * @param string $group Optional. The group the key is in. Default 'default'.
	 * @return int|false The item's new value on success, false on failure.
	 */
	public function incr( $key, $offset = 1, $group = 'default' )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		if ( ! $this->_exists( $key, $group ) )
		{
			return FALSE;
		}
		
		if ( ! is_numeric( $this->cache[ $group ][ $key ] ) )
		{
			$this->cache[ $group ][ $key ] = 0;
		}
		
		$offset = (int) $offset;
		
		$this->cache[ $group ][ $key ] += $offset;
		
		if ( $this->cache[ $group ][ $key ] < 0 )
		{
			$this->cache[ $group ][ $key ] = 0;
		}
		
		return $this->cache[ $group ][ $key ];
	}
	
	/**
	 * Decrements numeric cache item's value.
	 *
	 * @param int|string $key The cache key to decrement.
	 * @param int $offset Optional. The amount by which to decrement the item's value.
	 *                           Default 1.
	 * @param string $group Optional. The group the key is in. Default 'default'.
	 * @return int|false The item's new value on success, false on failure.
	 */
	public function decr( $key, $offset = 1, $group = 'default' )
	{
		if ( ! $this->is_valid_key( $key ) )
		{
			return FALSE;
		}
		
		if ( empty( $group ) )
		{
			$group = 'default';
		}
		
		if ( ! $this->_exists( $key, $group ) )
		{
			return FALSE;
		}
		
		if ( ! is_numeric( $this->cache[ $group ][ $key ] ) )
		{
			$this->cache[ $group ][ $key ] = 0;
		}
		
		$offset = (int) $offset;
		
		$this->cache[ $group ][ $key ] -= $offset;
		
		if ( $this->cache[ $group ][ $key ] < 0 )
		{
			$this->cache[ $group ][ $key ] = 0;
		}
		
		return $this->cache[ $group ][ $key ];
	}
	
	/**
	 * Clears the object cache of all data.
	 *
	 * @return true Always returns true.
	 */
	public function flush()
	{
		$this->cache = [];
		
		return TRUE;
	}
	
	/**
	 * Removes all cache items in a group.
	 *
	 * @param string $group Name of group to remove from cache.
	 * @return true Always returns true.
	 */
	public function flush_group( $group )
	{
		unset( $this->cache[ $group ] );
		
		return TRUE;
	}
	
	/**
	 * Sets the list of global cache groups.
	 *
	 * @param string|string[] $groups List of groups that are global.
	 */
	public function add_global_groups( $groups )
	{
		$groups = (array) $groups;
		
		$groups = array_fill_keys( $groups, TRUE );
		$this->global_groups = array_merge( $this->global_groups, $groups );
	}
	
	/**
	 * Resets cache keys.
	 */
	public function reset()
	{
		// Clear out non-global caches since the blog ID has changed.
		foreach ( array_keys( $this->cache ) as $group )
		{
			if ( ! isset( $this->global_groups[ $group ] ) )
			{
				unset( $this->cache[ $group ] );
			}
		}
	}
	
	/**
	 * Echoes the stats of the caching.
	 *
	 * Gives the cache hits, and cache misses. Also prints every cached group,
	 * key and the data.
	 */
	public function stats()
	{
		echo '<p>';
		echo "<strong>Cache Hits:</strong> {$this->cache_hits}<br />";
		echo "<strong>Cache Misses:</strong> {$this->cache_misses}<br />";
		echo '</p>';
		echo '<ul>';
		foreach ( $this->cache as $group => $cache )
		{
			echo '<li><strong>Group:</strong> ' . $group . ' - ( ' . number_format( strlen( serialize( $cache ) ) / KB_IN_BYTES, 2 ) . 'k )</li>';
		}
		echo '</ul>';
	}
}
