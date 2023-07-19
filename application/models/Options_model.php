<?php

namespace app\models;

use MY_Model;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Options_model extends MY_Model {
	
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
		$this->_db = 'options';
	}
	
	/**
	 * Get list of non-deleted options
	 *
	 * @param array $filters
	 * @param string $sort
	 * @param string $dir
	 * @param int $limit
	 * @param int $offset
	 * @return array|bool
	 */
	public function get_all( $filters = [], $sort = 'ID', $dir = 'ASC', $limit = 0, $offset = 0 )
	{
		$this->db->sql_calc_found_rows()
			->select( '*' )
			->from( $this->_db );
		
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
	 * Retrieve all settings
	 *
	 * @return object|bool
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
			
			$this->db->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->result();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Get specific option
	 *
	 * @param int $id
	 * @return object|boolean
	 */
	public function get( $id = NULL )
	{
		if ( $id )
		{
			$this->db->select( '*' )
				->from( $this->_db )
				->where( 'ID', $id );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Create the option
	 *
	 * @param array $data
	 *
	 * @return boolean
	 */
	public function create( $data = [] ) : bool
	{
		if ( $data )
		{
			$this->db->insert( $this->_db, $data );
			
			if ( $this->db->affected_rows() )
			{
				return $this->db->insert_id();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Update the option
	 *
	 * @param array $data
	 * @param array $where
	 *
	 * @return boolean
	 */
	public function update( $data = [], $where = [] ) : bool
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
	 * Delete an existing option
	 *
	 * @param string $option
	 * @return boolean
	 */
	public function delete( $option = NULL ) : bool
	{
		if ( $option )
		{
			$this->db->where( [ 'option_name' => $option ] )
				->delete( $this->_db );
			
			if ( $this->db->affected_rows() )
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
}
