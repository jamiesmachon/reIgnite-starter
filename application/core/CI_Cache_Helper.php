<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
 * CI_Cache_Helper.
 */
class CI_Cache_Helper {
	
	/**
	 * Get prefix for use with ci_cache_set. Allows all cache in a group to be invalidated at once.
	 *
	 * @param string $group Group of cache to get.
	 * @return string
	 */
	public static function get_cache_prefix( $group )
	{
		// Get cache key - uses cache key wc_orders_cache_prefix to invalidate when needed.
		$prefix = ci_cache_get( 'ci_' . $group . '_cache_prefix', $group );
		
		if ( FALSE === $prefix )
		{
			$prefix = microtime();
			ci_cache_set( 'ci_' . $group . '_cache_prefix', $prefix, $group );
		}
		
		return 'ci_cache_' . $prefix . '_';
	}
	
	/**
	 * Invalidate cache group.
	 *
	 * @param string $group Group of cache to clear.
	 */
	public static function invalidate_cache_group( $group )
	{
		ci_cache_set( 'wc_' . $group . '_cache_prefix', microtime(), $group );
	}
	
}

return new CI_Cache_Helper();