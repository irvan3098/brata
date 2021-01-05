<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Berita extends CI_Controller
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
		$status_hal['id']=0;
		$data_konten = array(
			'list_kategori' => $this->Mdl_brata->get_id_kategori(),
			'berita' => $this->Mdl_brata->berita()
		);
		
		$konten			= $this->load->view('admin/V_berita',$data_konten,true);
		$sidebar		= $this->load->view('admin/sidebar',$status_hal,true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		$this->load->view('admin/template',$data);
	}
	
	function tambah()
	{
		$tanggal = date("Y-m-d");
		$config = array(
			'upload_path' => './images/berita/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' => '2048',
			'max_width' => '2000',
			'max_height' => '2000'
 		);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('admin/Berita'));
			echo "error";
		} else {
			$file = $this->upload->data();
			$data = array(
				'id_kantor' => 0,
				'id_akun' => 1,
				'id_kategoriberita' => $_POST['kategori'],
				'judul' => $_POST['judul'],
				'gambar' => $_FILES['gambar']['name'],
				'tanggal' => $tanggal,
				'tulisan' => $_POST['tulisan']
			);
			$this->Mdl_brata->tambah($data,'t_berita');
			echo "berhasil";
		}
		$pesan ="<div class='alert alert-success alert-dismissible fade show'>
        	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        	Data berhasil disimpan
        </div>";
		$this->session->set_flashdata('message',$pesan);
		redirect(site_url('admin/Berita'));
		
		//echo var_dump($data);	  
	}
	
	function hapus($id_berita)
	{
		$this->Mdl_brata->hapus($id_berita,'t_berita','id_berita');  
		$pesan ="<div class='alert alert-success alert-dismissible fade show'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
					Data berhasil dihapus</div>";
		$this->session->set_flashdata('message',$pesan);
		redirect(site_url('admin/berita'));	
	}
	
	function update()
	{
		
	}
	
}

?>