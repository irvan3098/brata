<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));	

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('mdl_brata');
		
	}
	
	
	
	function cek_login()
	{
		$user = $_POST['username'];
        $pass = $_POST['password'];
			
		$data = $this->mdl_brata->login($user,$pass);
		
		if (empty($data)) {
			$pesan ="<div class='alert alert-denger alert-dismissible fade show'>
        	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        	Username dan password salah
        </div>";
			$this->session->set_flashdata('message',$pesan);
			header("Location: ".site_url('index'));
			
		}else{
			
			header("Location: ".site_url('admin/index'));
			
		}
	}
	
	function logout()
		{
			session_destroy();
			header("Location: ".site_url('index'));
		}
}
?>