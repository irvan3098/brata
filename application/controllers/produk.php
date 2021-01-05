<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
        $this->load->library('session');
        $this->load->library('html_dom');
		$this->load->model('Mdl_brata');
		
	}
	
	function kredit()
	{
		$konten_ = array(
			'pro_kre' => $this->Mdl_brata->tam_pro_kre()
		);

		$konten_h=array(
			'h_lpk' => $this->Mdl_brata->g_lpk()
		);
		
		$konten		= $this->load->view('V_produk_kredit',$konten_,true);
		$header		= $this->load->view('Header',$konten_h,true);
		$footer		= $this->load->view('Footer',array(),true);
		
		
		$data = array(
            'header'		=> $header,
			'konten'		=> $konten,
			'footer'		=> $footer,
        );
        
		$this->load->view('Template',$data);
    }
    
    function deposito()
	{
		$konten_ = array(
			'pro_kre' => $this->Mdl_brata->tam_pro_dep()
		);

        $konten		= $this->load->view('V_produk_deposito',$konten_,true);
		$header		= $this->load->view('Header',array(),true);
		$footer		= $this->load->view('Footer',array(),true);
		
		
		$data = array(
            'header'		=> $header,
			'konten'		=> $konten,
			'footer'		=> $footer,
        );
        
		$this->load->view('Template',$data);
    }
    
    function tabungan()
	{
		$konten_ = array(
			'pro_tab' => $this->Mdl_brata->tam_pro_tab()
		);

        $konten		= $this->load->view('V_produk_tabungan',$konten_,true);
		$header		= $this->load->view('Header',array(),true);
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