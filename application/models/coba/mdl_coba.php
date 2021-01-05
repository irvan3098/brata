<?php
class Mdl_coba extends CI_Model
{
	function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
		}
	
	function daftar_sm(){  
		$sql_query = "SELECT s.id_pengguna, s.id_studio, bd.icon, bd.nama_studio, bd.alamat, bd.buka, bd.tutup, bd.kontak, bd.lat, bd.lng FROM bio_data AS bd
JOIN pengguna AS p USING(id_biodata) 
JOIN studio AS s USING(id_pengguna) 
GROUP BY s.id_pengguna 
";
        $row = $this->db->query($sql_query);
        return $row->result_array(); 
    }
	
	function detail_harga($id_pengguna)
	{
		$sql="SELECT nama_studio,harga FROM pengguna
JOIN studio USING(id_pengguna)
WHERE id_pengguna = $id_pengguna";
		$row = $this->db->query($sql);
        return $row->result_array();
	}
	
	function data_table($id,$tgl1,$tgl2){  
        $sql_query = "SELECT id_pengguna,id_studio,nama_band,tgl,jam_msk, jam_klr FROM studio JOIN jadwal USING(id_studio) WHERE id_pengguna = $id and tgl between '$tgl1' and '$tgl2'";  
        $query=$this->db->query($sql_query);  
        return $query->result_array();  
    }
	
	function jum_studio($id)
	{
        $sql_query = "SELECT * from studio where id_pengguna=$id  ";  
        $query=$this->db->query($sql_query);  
        return $query->result_array();  
	}
}

?>