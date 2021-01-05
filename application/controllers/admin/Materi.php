<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Materi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('session');
		$this->load->model('mdl_brata');
		
	}
	
	function index()
	{
		$konten			= $this->load->view('admin/V_materi',array(),true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
	}
	
	function coba()
	{
		$pernorek = $this->mdl_brata->norek();
		foreach($pernorek as $danorek)
		{
			$i=0;
			$dat_tgh = $this->mdl_brata->tagihan();
			foreach($dat_tgh as $tagihan)
			{
				
				$dat["new_norek"][$i] = $tagihan["new_norek"];
				$dat["thn"][$i] = $tagihan["thn"];
				$dat["bln"][$i] = $tagihan["bln"];
				$dat["tgl"][$i] = $tagihan["tgl"];
				$dat["tgl_trans"][$i] = $tagihan["tgl_trans"];
				$dat["norek"][$i] = $tagihan["norek"];
				$dat["pokok"][$i] = $tagihan["pokok"];
				$dat["bunga"][$i] = $tagihan["bunga"];
				$dat["denda"][$i] = $tagihan["denda"];
				//jika ada pembauyaran angsuran pada bulan yang sama
				$koderek = $tagihan["koderek"];
				$car_angsuran = $this->mdl_brata->cari_angsuran($koderek);
				foreach($car_angsuran as $angsuran)
				{
					$total_p = $total_p + $angsuran['pokok'];
					$total_b = $total_b + $angsuran['bunga'];
					$total_d = $total_d + $angsuran['denda'];
				}
				
				
				$dat["bypokok"][$i] = $total_p;
				$dat["bybunga"][$i] = $total_b;
				$dat["bydenda"][$i] = $total_d;
				$total_p = 0;
				$total_b = 0;
				$total_d = 0;
				
				$i++;
			}
		}
		
		
		for($j=0;$j<=5000;$j++)
		{
			echo 
			$dat["new_norek"][$j]." | ".
			$dat["thn"][$j]." | ".
			$dat["bln"][$j]." | ".
			$dat["tgl"][$j]." | ".
			$dat["tgl_trans"][$j]." | ".
			$dat["norek"][$j]." | ".
			$dat["pokok"][$j]." | ".
			$dat["bunga"][$j]." | ".
			$dat["denda"][$j]." | ".
			$dat["bypokok"][$j]." | ".
			$dat["bybunga"][$j]." | ".
			$dat["bydenda"][$j]."<br>";
		}
	}
	
	function hapus()
	{
		
	}
	
	function update()
	{
		
	}
	
}

?>