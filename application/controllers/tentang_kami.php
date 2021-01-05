<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Tentang_kami extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('Mdl_brata');
		
	}
	
	function index()
	{
		$konten_h=array(
			'h_lpk' => $this->Mdl_brata->g_lpk()
		);
		
		$konten		= $this->load->view('V_tentang_kami',array(),true);
		$header		= $this->load->view('Header',$konten_h,true);
		$footer		= $this->load->view('Footer',array(),true);
		
		
		$data = array(
            'header'		=> $header,
			'konten'		=> $konten,
			'footer'		=> $footer,
        );
        
		$this->load->view('Template',$data);
	}
	
	
}

?>