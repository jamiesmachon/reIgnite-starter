<?php

namespace app\models;

use MY_Model;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Usermeta_model extends MY_Model {
	
	/**
	 * @vars
	 */
	private $_db;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
		
		// define primary table
		$this->_db = 'usermeta';
	}
	
	/**
	 * Get list of non-deleted usermeta
	 *
	 * @param array $filters
	 * @param string $sort
	 * @param string $dir
	 * @param int $limit
	 * @param int $offset
	 * @return array|bool
	 */
	public function get_all( $filters = [], $sort = 'umeta_id', $dir = 'ASC', $limit = 0, $offset = 0 )
	{
		$this->db->sql_calc_found_rows()->select( '*' )
			->from( $this->_db );
		
		// apply any filters
		if ( ! empty( $filters ) )
		{
			foreach ( $filters as $key => $value )
			{
				$this->db->where( $key, $value );
			}
		}
		
		$this->db->order_by( $sort, $dir );
		
		if ( $limit )
		{
			$this->db->limit( $limit, $offset );
		}
		
		$query = $this->db->get();
		
		if ( $query->num_rows() )
		{
			return $query->result();
		}
		
		return FALSE;
	}
	
	/**
	 * Get a specific usermeta by key value pairs array
	 *
	 * @param array $filters
	 * @return array|boolean
	 */
	public function get_by( $filters = [] )
	{
		if ( ! empty( $filters ) )
		{
			$this->db->select( '*' )
				->from( $this->_db );
			
			foreach ( $filters as $key => $value )
			{
				$this->db->where( $key, $value );
			}
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Get a specific usermeta
	 *
	 * @param int $umeta_id
	 * @return array|boolean
	 */
	public function get( $umeta_id = NULL )
	{
		$this->db->select( '*' )
			->from( $this->_db )
			->where( 'umeta_id', $umeta_id );
		
		$query = $this->db->get();
		
		if ( $query->num_rows() )
		{
			return $query->row();
		}
		
		return FALSE;
	}
	
	/**
	 * Add a new usermeta
	 *
	 * @param null $user_id
	 * @param string $meta_key
	 * @param null $meta_value
	 * @return int|boolean
	 */
	public function create( $user_id = NULL, $meta_key = '', $meta_value = NULL )
	{
		if ( $user_id !== NULL && ! empty( $meta_key ) && ! empty( $meta_value ) )
		{
			$this->db->insert(
				$this->_db,
				[
					'user_id'    => $user_id,
					'meta_key'   => $meta_key,
					'meta_value' => $meta_value
				]
			);
			
			if ( $this->db->affected_rows() )
			{
				return $this->db->insert_id();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Edit an existing usermeta
	 *
	 * @param array $data
	 * @param array $where
	 * @return int|boolean
	 */
	public function update( $data = [], $where = [] )
	{
		if ( $data && $where )
		{
			$this->db->update( $this->_db, $data, $where );
			
			if ( $this->db->affected_rows() )
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Soft delete an existing usermeta
	 *
	 * @param int|array $id
	 * @return boolean
	 */
	public function delete( $id = NULL ) : bool
	{
		if ( $id )
		{
			if ( is_array( $id ) )
			{
				$this->db->where_in( 'umeta_id', $id );
			}
			else
			{
				$this->db->where( 'umeta_id', $id );
			}
			$this->db->delete( $this->_db );
			
			if ( $this->db->affected_rows() )
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Count instances of the same meta_key
	 *
	 * @param string $meta_key
	 * @param string|int $user_id
	 * @return boolean|int
	 */
	public function count( $meta_key = NULL, $user_id = NULL ) : bool
	{
		if ( $meta_key && $meta_key )
		{
			$this->db->select( 'COUNT(*) AS count' )
				->from( $this->_db )
				->where( [ 'meta_key' => $meta_key, 'user_id' => $user_id ] );
			
			$query = $this->db->get();
			
			if ( $query->row()->count > 0 )
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
}