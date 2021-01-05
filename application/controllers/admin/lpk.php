<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class lpk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
        $this->load->library('session');
        $this->load->library('html_dom');
		$this->load->model('Mdl_brata');
			
	
	}
	
	function index()
	{
        $konten_ = array(
			'list_kategori' => $this->Mdl_brata->info_berita_kategori(),
			'berita' => $this->Mdl_brata->berita()
		);

		$konten			= $this->load->view('admin/V_galeri',$konten_,true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
	}
	
	
}

?>