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
		$status_hal['id']=1;
		$konten_ = array(
			'pro_kre' => $this->Mdl_brata->tam_pro_kre(),
			'list_kategori' => $this->Mdl_brata->get_id_metode_bunga()
		);

        $konten			= $this->load->view('admin/V_pro_kredit',$konten_,true);
		$sidebar		= $this->load->view('admin/sidebar',$status_hal,true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
		
		//$coba=$this->Mdl_brata->get_id_metode_bunga();
		//echo var_dump($coba);

		$this->load->view('admin/template',$data);
    }
    
    function deposito()
	{
		$status_hal['id']=1;
		$konten_ = array(
			'pro_dep' => $this->Mdl_brata->tam_pro_dep(),
		);

		
        $konten			= $this->load->view('admin/V_pro_deposito',$konten_,true);
		$sidebar		= $this->load->view('admin/sidebar',$status_hal,true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
    }
    
    function tabungan()
	{
		$status_hal['id']=1;
		$konten_ = array(
			'pro_tab' => $this->Mdl_brata->tam_pro_tab()
		);

        $konten			= $this->load->view('admin/V_pro_tabungan',$konten_,true);
		$sidebar		= $this->load->view('admin/sidebar',$status_hal,true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
	}
	
	
}

?>