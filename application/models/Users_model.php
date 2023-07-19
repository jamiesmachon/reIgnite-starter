<?php

namespace app\models;

use MY_Model;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Users_model extends MY_Model {
	
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
		$this->_db = 'users';
	}
	
	/**
	 * Get list of non-deleted users
	 *
	 * @param array $filters
	 * @param string $sort
	 * @param string $dir
	 * @param int $limit
	 * @param int $offset
	 * @return array
	 */
	public function get_all( $filters = [], $sort = 'ID', $dir = 'ASC', $limit = 0, $offset = 0 ) : array
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
		
		if ( $query->num_rows() > 0 )
		{
			return $query->result();
		}
		
		return FALSE;
	}
	
	/**
	 * Get specific user
	 *
	 * @param array $filters
	 * @return object|boolean
	 */
	public function get_by( $filters = [] )
	{
		if ( $filters )
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
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Get specific user
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
	 * Add a new user
	 *
	 * @param array $data
	 * @return int|boolean
	 */
	public function create( $data = [] )
	{
		if ( $data )
		{
			// secure password
			$user_salt = hash( 'sha512', uniqid( random_int( 1, mt_getrandmax() ), TRUE ) );
			$user_pass = hash( 'sha512', $data[ 'user_pass' ] . $user_salt );
			$user_activation_key = sha1( microtime( TRUE ) . mt_rand( 10000, 90000 ) );
			
			$this->db->insert(
				$this->_db,
				[
					'user_login'          => $data[ 'user_login' ],
					'user_pass'           => $user_pass,
					'user_salt'           => $user_salt,
					'user_nicename'       => ( $data[ 'user_nicename' ] ?? $data[ 'user_login' ] ),
					'user_email'          => $data[ 'user_email' ],
					'user_url'            => ( $data[ 'user_url' ] ?? '' ),
					'user_activation_key' => $user_activation_key,
					'user_status'         => 0,
					'display_name'        => ( $data[ 'display_name' ] ?? $data[ 'user_login' ] )
				]
			);
			
			if ( $this->db->affected_rows() )
			{
				return $user_activation_key;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Edit an existing user
	 *
	 * @param array $data
	 * @return int|boolean
	 */
	public function update( $data = [] )
	{
		if ( $data )
		{
			$set = [
				'user_nicename' => $data[ 'user_nicename' ],
				'user_email'    => $data[ 'user_email' ],
				'user_url'      => $data[ 'user_url' ],
				'user_status'   => $data[ 'user_status' ],
				'display_name'  => $data[ 'display_name' ]
			];
			
			if ( $data[ 'user_pass' ] !== '' )
			{
				// secure password
				$user_salt = hash( 'sha512', uniqid( random_int( 1, mt_getrandmax() ), TRUE ) );
				$user_pass = hash( 'sha512', $data[ 'user_pass' ] . $user_salt );
				
				$set[ 'user_pass' ] = $user_pass;
				$set[ 'user_salt' ] = $user_salt;
			}
			
			$this->db->update( $this->_db, $set, [ 'ID' => $data[ 'id' ] ] );
			
			if ( $this->db->affected_rows() )
			{
				return $data[ 'id' ];
			}
			
			return FALSE;
		}
	}
	
	/**
	 * Soft delete an existing user
	 *
	 * @param int $id
	 * @return boolean
	 */
	public function delete( $id = NULL ) : bool
	{
		if ( $id )
		{
			$this->db->set( 'deleted', 'NOW()', FALSE )
				->where( [ 'ID' => $id ] )
				->update( $this->_db );
			
			if ( $this->db->affected_rows() )
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
}
