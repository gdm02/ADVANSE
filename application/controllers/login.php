<?php

class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');

 }
 
 function index()
 {
	$this->load->helper(array('form'));
	$this->load->view('templates/header2');
	$this->load->view('login');
	$this->load->view('templates/footer');
 }

}
 
?>