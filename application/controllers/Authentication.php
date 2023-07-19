<?php

namespace app\controllers;

use Public_Controller;

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Authentication extends Public_Controller {
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		// construct parent class
		parent::__construct();
		
		$this->load->model( 'authentication_model' );
	}
	
	/**************************************************************************************
	 * PUBLIC FUNCTIONS
	 **************************************************************************************/
	/**
	 * Default
	 */
	public function index()
	{
		// set form validation rules
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		$this->form_validation->set_rules( 'user_email', __( 'Email Address', 'suppliers-portal' ), 'required|trim|max_length[256]' );
		$this->form_validation->set_rules( 'user_pass', __( 'Password', 'suppliers-portal' ), 'required|trim|max_length[72]|callback__check_login' );
		
		if ( $this->form_validation->run() === TRUE )
		{
			if ( $this->session->userdata( 'redirect' ) )
			{
				// redirect to desired page
				$redirect = $this->session->userdata( 'redirect' );
				$this->session->unset_userdata( 'redirect' );
				redirect( $redirect );
			}
			else
			{
				// user was logged in so send to admin
				if ( is_user_logged_in() )
				{
					redirect( base_url( 'admin' ) );
				}
				else
				{
					redirect( base_url() );
				}
			}
		}
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/authentication/sign-in/general.js" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url(),
			'form_redirect' => base_url( 'admin' )
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/authentication/sign-in', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Signup Form
	 */
	public function sign_up()
	{
		// validators
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		$this->form_validation->set_rules( 'user_login', __( 'Username', 'suppliers-portal' ), 'required|trim|max_length[255]' );
		$this->form_validation->set_rules( 'user_email', __( 'Email Address', 'suppliers-portal' ), 'required|trim|max_length[255]|valid_email|callback__check_email' );
		$this->form_validation->set_rules( 'user_pass', __( 'Password', 'suppliers-portal' ), 'required|trim|min_length[8]' );
		$this->form_validation->set_rules( 'confirm_user_pass', __( 'Repeat Password', 'suppliers-portal' ), 'required|trim|matches[user_pass]' );
		$this->form_validation->set_rules( 'tac', __( 'Terms', 'suppliers-portal' ), 'required' );
		
		if ( $this->form_validation->run() === TRUE )
		{
			$user_activation_key = $this->users_model->create( $this->input->post() );
			if ( $user_activation_key )
			{
				// build the validation URL
				$encrypted_user_email = sha1( $this->input->post( 'user_email', TRUE ) );
				$validation_url = base_url( 'validate' ) . "?eus={$encrypted_user_email}&uak={$user_activation_key}";
				
				//TODO:: send the account validation email
				
				// $this->session->set_flashdata( 'message', sprintf( __( 'Your signup has been accessed please check your email address (%s) to validate your account.', 'suppliers-portal' ), $this->input->post( 'user_email', TRUE ) ) );
				$this->session->set_flashdata( 'message', sprintf( __( 'Your signup has been accessed please check your email address (%s) to validate your account.', 'suppliers-portal' ), $validation_url ) );
			}
			else
			{
				$this->session->set_flashdata( 'error', __( 'An issue occurred while processing your signup, please try again later.', 'suppliers-portal' ) );
				redirect( $_SERVER[ 'REQUEST_URI' ], 'refresh' );
			}
			
			// redirect home and display message
			redirect( base_url() );
		}
		
		// setup page header data
		$this->set_page_title( __( 'Welcome to SOROS', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/authentication/sign-up/general.js" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url( 'sign-up' ),
			'form_redirect' => base_url()
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/authentication/sign-up', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * Validate new account
	 */
	public function validate()
	{
		// get codes
		$encrypted_user_email = $this->input->get( 'eus' );
		$user_activation_key = $this->input->get( 'uak' );
		
		// validate account
		$validated = $this->authentication_model->validate_account( $encrypted_user_email, $user_activation_key );
		if ( $validated )
		{
			//TODO:: send the welcome email
			
			$this->session->set_flashdata( 'message', __( 'Your account was successfully verified, you can now login.', 'suppliers-portal' ) );
		}
		else
		{
			$this->session->set_flashdata( 'error', __( 'An issue occurred while validate your signup, please try again later.', 'suppliers-portal' ) );
		}
		
		redirect( base_url() );
	}
	
	/**
	 * Logout
	 */
	public function sign_out()
	{
		ci_logout();
		
		redirect( base_url() );
	}
	
	/**
	 * Forgot password
	 */
	public function reset_password()
	{
		// validators
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		$this->form_validation->set_rules( 'user_email', __( 'Email Address', 'suppliers-portal' ), 'required|trim|max_length[255]|valid_email|callback__check_email_exists' );
		
		if ( $this->form_validation->run() === TRUE )
		{
			// check we have a user to send a resent email to
			$user = $this->users_model->get_by( [ 'user_email' => $this->input->post( 'user_email' ) ] );
			if ( $user )
			{
				// build the validation URL
				$encrypted_user_email = sha1( $this->input->post( 'user_email', TRUE ) );
				$validation_url = base_url( 'new-password' ) . "?eus={$encrypted_user_email}";
				
				// TODO:: send the reset password request email
				$this->session->set_flashdata( 'message', sprintf( __( 'Your password reset request has been sent to your email address (%s)', 'suppliers-portal' ), $validation_url ) );
				
				// $this->session->set_flashdata( 'message', sprintf( __( 'Your password reset request has been sent to your email address (%s)', 'suppliers-portal' ), $user->user_email ) );
			}
			else
			{
				$this->session->set_flashdata( 'error', __( 'An issue occurred while processing your password reset request, please try again later.', 'suppliers-portal' ) );
			}
			
			// redirect home and display message
			redirect( base_url() );
		}
		
		// setup page header data
		$this->set_page_title( __( 'Forgot Password', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/authentication/reset-password/reset-password.js" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url( 'reset-password' ),
			'form_redirect' => base_url()
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/authentication/reset-password', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	/**
	 * New password
	 */
	public function new_password()
	{
		$user = NULL;
		// if empty results, return to list
		if ( $this->input->get( 'eus' ) )
		{
			// get the user by matching the encrypted email
			$user = $this->authentication_model->encrypted_email_exists( $this->input->get( 'eus' ) );
		}
		
		// validators
		$this->form_validation->set_error_delimiters( config_item( 'error_delimeter_left' ), config_item( 'error_delimeter_right' ) );
		$this->form_validation->set_rules( 'user_email', __( 'Email Address', 'suppliers-portal' ), 'required|trim|max_length[255]|valid_email|callback__check_email_exists' );
		$this->form_validation->set_rules( 'user_pass', __( 'Password', 'suppliers-portal' ), 'required|trim|min_length[8]' );
		$this->form_validation->set_rules( 'confirm_user_pass', __( 'Repeat Password', 'suppliers-portal' ), 'required|trim|matches[user_pass]' );
		$this->form_validation->set_rules( 'tac', __( 'Terms', 'suppliers-portal' ), 'required' );
		
		if ( $this->form_validation->run() === TRUE )
		{
			// save the changes
			$user = $this->authentication_model->reset_password( $this->input->post() );
			if ( $user )
			{
				// TODO:: send a password reset success email
				
				$this->session->set_flashdata( 'message', sprintf( lang( 'core success new_password' ), $user->display_name ) );
			}
			else
			{
				$this->session->set_flashdata( 'error', lang( 'core error new_password' ) );
			}
			
			// redirect home and display message
			redirect( base_url() );
		}
		
		if ( ! $user )
		{
			// redirect home and display message
			redirect( base_url() );
		}
		
		// setup page header data
		$this->set_page_title( __( 'Setup New Password', 'suppliers-portal' ) );
		
		// load sign-in specific JS file
		$this->add_theme_scripts( "custom/authentication/reset-password/new-password.js" );
		
		$data = $this->_includes;
		
		// set content data
		$content_data = [
			'form_action'   => base_url( 'new-password?eus=' . $this->input->get( 'eus' ) ),
			'form_redirect' => base_url(),
			'user'          => $user
		];
		
		// load views
		$data[ '_content' ] = $this->load->view( 'pages/authentication/new-password', $content_data, TRUE );
		$this->load->view( $this->_template, $data );
	}
	
	
	/**************************************************************************************
	 * PRIVATE VALIDATION CALLBACK FUNCTIONS
	 **************************************************************************************/
	/**
	 * Verify the login credentials
	 *
	 * @param string $password
	 *
	 * @return boolean
	 */
	public function _check_login( $password ) : bool
	{
		// limit number of login attempts
		$ok_to_login = $this->authentication_model->login_attempts();
		if ( $ok_to_login )
		{
			$login = $this->authentication_model->login( $this->input->post( 'user_email', TRUE ), $password );
			if ( $login )
			{
				ci_set_current_user( $login->ID );
				return TRUE;
			}
			
			$this->form_validation->set_message( '_check_login', __( 'Invalid username or password.', 'suppliers-portal' ) );
			
			return FALSE;
		}
		
		$this->form_validation->set_message( '_check_login', sprintf( __( 'You have made too many attempts to log in too quickly. Please wait %s seconds and try again.', 'suppliers-portal' ), config_item( 'login_max_time' ) ) );
		
		return FALSE;
	}
	
	/**
	 * Make sure username is available
	 *
	 * @param string $username
	 *
	 * @return int|boolean
	 */
	public function _check_username( $username )
	{
		if ( $this->authentication_model->username_exists( $username ) )
		{
			$this->form_validation->set_message( '_check_username', sprintf( __( 'This username already exist.', 'suppliers-portal' ), $username ) );
			
			return FALSE;
		}
		
		return $username;
	}
	
	/**
	 * Make sure email is available
	 *
	 * @param string $email
	 *
	 * @return int|boolean
	 */
	public function _check_email( $email )
	{
		if ( $this->authentication_model->email_exists( $email ) )
		{
			$this->form_validation->set_message( '_check_email', sprintf( __( 'This email address already exist.', 'suppliers-portal' ), $email ) );
			
			return FALSE;
		}
		
		return $email;
	}
	
	/**
	 * Make sure email exists
	 *
	 * @param string $email
	 *
	 * @return int|boolean
	 */
	public function _check_email_exists( $email )
	{
		if ( ! $this->authentication_model->email_exists( $email ) )
		{
			$this->form_validation->set_message( '_check_email_exists', sprintf( __( 'This email address does not exist.', 'suppliers-portal' ), $email ) );
			
			return FALSE;
		}
		
		return $email;
	}
	
}