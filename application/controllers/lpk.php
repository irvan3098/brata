<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Lpk extends CI_Controller
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
		
		$konten_ = array(
			'kategori' => $this->Mdl_brata->info_berita_kategori(),
			'berita' => $this->Mdl_brata->berita()
        );
        
        $konten_h=array(
			'h_lpk' => $this->Mdl_brata->g_lpk()
		);
		
		$konten		= $this->load->view('V_index',$konten_,true);
		$header		= $this->load->view('Header',$konten_h,true);
		$footer		= $this->load->view('Footer',array(),true);
		
		echo $id_lpk;

		$data = array(
            'header'		=> $header,
			'konten'		=> $konten,
			'footer'		=> $footer,
        );
        
		//$this->load->view('Template',$data);
	}

	function tampil($id_lpk)
	{
		
		$konten_ = array(
			'data_lpk' => $this->Mdl_brata->ambil_data_lpk($id_lpk)
        );
        
        $konten_h=array(
			'h_lpk' => $this->Mdl_brata->g_lpk()
		);
		
		$konten		= $this->load->view('VT_lpk',$konten_,true);
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