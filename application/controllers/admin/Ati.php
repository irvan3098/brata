<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Ati extends CI_Controller
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
		$konten			= $this->load->view('admin/V_ati',array(),true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
	}
	
	function tambah()
	{
		$data_post=array(  
                'kode' 				=> $_POST["kode"],
				'tgl_pembelian'		=> $_POST["tgl_pembelian"],
				'nama_barang ' 		=> $_POST["nama_barang"],
				'jenis_barang' 		=> $_POST["jenis_barang"],
				'merk_barang'		=> $_POST["merk_barang"],
				'no_serial_barang'	=> $_POST["no_serial_barang"],
				'harga_pembelian'	=> $_POST["harga_pembelian"],
				'jt_penyusutan'		=> $_POST["jt_penyusutan"],
				'nilai_penyusutan'	=> $_POST["nilai_penyusutan"],
				'status_barang'		=> $_POST["status_barang"],
				'keterangan'		=> $_POST["keterangan"],
				'posisi'			=> $_POST["posisi_ati"],
				'peruntukan'		=> $_POST["peruntukan"],
				'harga_update'		=> $_POST["harga_update"]
            );  
			
       	//$tambah = $this->mdl_brata->tambah($data_post,'t_brata_ati');
		echo $_POST["kode"].$_POST["tgl_pembelian"]."<br>";
		echo $_POST["nama_barang"]."<br>";
		echo $_POST["jenis_barang"]."<br>";
		echo $_POST["merk_barang"]."<br>";
		echo $_POST["no_serial_barang"]."<br>";
		echo $_POST["harga_pembelian"]."<br>";
		echo $_POST["jt_penyusutan"]."<br>";
		echo $_POST["nilai_penyusutan"]."<br>";
		echo $_POST["status_barang"]."<br>";
		echo $_POST["keterangan"]."<br>";
		echo $_POST["posisi_ati"]."<br>";
		echo $_POST["peruntukan"]."<br>";
		echo $_POST["harga_update"]."<br>";
	}
	
	function hapus()
	{
		
	}
	
	function update()
	{
		
	}
	
}

?>