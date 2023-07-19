<?php

namespace app\models;

use MY_Model;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Authentication_model extends MY_Model {
	
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
	 * Check for valid login credentials
	 *
	 * @param string $username
	 * @param string $password
	 *
	 * @return object|boolean
	 */
	public function login( $username = NULL, $password = NULL )
	{
		if ( $username && $password )
		{
			$this->db->select( '*' );
			$this->db->from( $this->_db );
			$this->db->group_start();
			$this->db->where( 'user_login', $username );
			$this->db->or_where( 'user_email', $username );
			$this->db->group_end();
			$this->db->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				$result = $query->row();
				$salted_password = hash( 'sha512', $password . $result->user_salt );
				if ( $result->user_pass === $salted_password )
				{
					unset( $result->user_pass, $result->user_salt );
					return $result;
				}
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Validate a user-created account
	 *
	 * @param string $encrypted_user_email
	 * @param string $user_activation_key
	 * @return int|boolean
	 */
	public function validate_account( $encrypted_user_email = NULL, $user_activation_key = NULL )
	{
		if ( $encrypted_user_email && $user_activation_key )
		{
			$this->db->select( 'ID' )
				->from( $this->_db )
				->where( "SHA1(`user_email`)", $this->db->escape( $encrypted_user_email ), FALSE )
				->where( "user_activation_key", $user_activation_key )
				->where( 'user_status', 0 )
				->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				$result = $query->row();
				
				$this->db->where( 'ID', $result->ID )->update( $this->_db, [ 'user_status' => 1 ] );
				
				if ( $this->db->affected_rows() )
				{
					return $result->ID;
				}
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Reset password
	 *
	 * @param array $data
	 *
	 * @return object|boolean
	 */
	public function reset_password( $data = [] )
	{
		if ( $data )
		{
			$this->db->select( '*' )
				->from( $this->_db )
				->where( 'user_email', $data[ 'user_email' ] )
				->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				// get user
				$user = $query->row();
				
				if ( $data[ 'user_pass' ] !== '' )
				{
					// secure password
					$user_salt = hash( 'sha512', uniqid( random_int( 1, mt_getrandmax() ), TRUE ) );
					$user_pass = hash( 'sha512', $data[ 'user_pass' ] . $user_salt );
					
					$set[ 'user_salt' ] = $user_salt;
					$set[ 'user_pass' ] = $user_pass;
					
					$this->db->update( $this->_db, $set, [ 'ID' => $user->ID ] );
					
					if ( $this->db->affected_rows() )
					{
						return $user;
					}
				}
				
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Handle user login attempts
	 *
	 * @return boolean
	 */
	public function login_attempts() : bool
	{
		// delete older attempts
		$older_time = date( 'Y-m-d H:i:s', strtotime( '-' . config_item( 'login_max_time' ) . ' seconds' ) );
		
		$sql = "DELETE FROM login_attempts WHERE attempt < '{$older_time}'";
		$query = $this->db->query( $sql );
		
		// insert the new attempt
		$sql = "INSERT INTO login_attempts (ip,attempt) VALUES (" . $this->db->escape( $_SERVER[ 'REMOTE_ADDR' ] ) . ", '" . date( "Y-m-d H:i:s" ) . "')";
		$query = $this->db->query( $sql );
		
		// get count of attempts from this IP
		$sql = "SELECT COUNT(*) AS attempts FROM login_attempts  WHERE ip = " . $this->db->escape( $_SERVER[ 'REMOTE_ADDR' ] );
		$query = $this->db->query( $sql );
		
		if ( $query->num_rows() )
		{
			$result = $query->row();
			if ( $result->attempts > config_item( 'login_max_attempts' ) )
			{
				// too many attempts
				return FALSE;
			}
		}
		
		return TRUE;
	}
	
	/**
	 * Check to see if a username already exists
	 *
	 * @param string $username
	 *
	 * @return boolean
	 */
	public function username_exists( $username ) : bool
	{
		$this->db->select( 'id' )
			->from( $this->_db )
			->where( 'user_login', $username )
			->limit( 1 );
		
		$query = $this->db->get();
		
		if ( $query->num_rows() )
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	/**
	 * Check to see if an email already exists
	 *
	 * @param string $email
	 *
	 * @return boolean
	 */
	public function email_exists( $email ) : bool
	{
		$this->db->select( 'id' )
			->from( $this->_db )
			->where( 'user_email', $email )
			->limit( 1 );
		
		$query = $this->db->get();
		
		if ( $query->num_rows() )
		{
			return TRUE;
		}
		
		return FALSE;
	}
	
	/**
	 * Validate a user exists by encrypted email
	 *
	 * @param string $encrypted_user_email
	 * @return object|boolean
	 */
	public function encrypted_email_exists( $encrypted_user_email = NULL )
	{
		if ( $encrypted_user_email )
		{
			$this->db->select( '*' )
				->from( $this->_db )
				->where( "SHA1(`user_email`)", $this->db->escape( $encrypted_user_email ), FALSE )
				->where( 'user_status', 1 )
				->limit( 1 );
			
			$query = $this->db->get();
			
			if ( $query->num_rows() )
			{
				return $query->row();
			}
		}
		
		return FALSE;
	}
	
}
