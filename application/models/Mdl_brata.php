<?php
class Mdl_brata extends CI_Model{  
	function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
		}
	
	function tampilkan_bulan(){  
        $sql = "select * from t_bln_thn_p where tahun = 2019";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function request_cashratio($id){  
        $sql = "SELECT a.id_perhitungan,c.kode_perk,
		c.nama_perkiraan, c.id_bln_thn_p, c.saldo_akhir FROM t_perhitungan a
JOIN t_rincian_perhitungan b USING(id_perhitungan)
JOIN t_neraca c USING(kode_perk)
JOIN t_bln_thn_p d USING(id_bln_thn_p)
WHERE c.id_bln_thn_p = $id and d.tahun = 2019" ;
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function request_perhitungan($id,$id_p){  
        $sql = "SELECT a.id_perhitungan,c.kode_perk,
		c.nama_perkiraan, c.id_bln_thn_p, c.saldo_akhir FROM t_perhitungan a
JOIN t_rincian_perhitungan b USING(id_perhitungan)
JOIN t_neraca c USING(kode_perk) WHERE c.id_bln_thn_p = $id and a.id_perhitungan = $id_p";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function request_data_bopo($id){  
        $sql = "SELECT a.id_perhitungan,c.kode_perk,
		c.nama_perkiraan, c.id_bln_thn_p, c.saldo_akhir FROM t_perhitungan a
JOIN t_rincian_perhitungan b USING(id_perhitungan)
JOIN t_neraca c USING(kode_perk) WHERE c.id_bln_thn_p = $id and a.id_perhitungan = $id_p";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	
	function request_jum_kol($id){  
        $sql = "SELECT id_bln_thn_p ,kol,SUM(baki_debet) as jum_baki FROM table_10 GROUP BY kol ";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function request_kol($id,$kol){  
        $sql = "SELECT id_bln_thn_p ,kol,SUM(baki_debet) AS jum_baki FROM table_10
JOIN t_bln_thn_p USING(id_bln_thn_p)
WHERE id_bln_thn_p= $id AND kol = '$kol'
GROUP BY kol";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function hitung_dpk($id,$dpk){  
        $sql = "SELECT FT_Pokok, SUM(baki_debet) AS debet, COUNT(Baki_Debet) AS noa FROM table_10
WHERE id_bln_thn_p = $id AND FT_Pokok = '$dpk'";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function data_pegawai(){  
        $sql = "SELECT * from t_pegawai";
		$query=$this->db->query($sql);  
        return $query->result_array(); 
    }
	
	function login($user,$pass) 
	{    
	
		$sql = "SELECT * FROM t_akun WHERE username = '$user' and password = '$pass'";
		$query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_id_kategori(){  
        $sql = "SELECT id_kategoriberita, nama_kategori FROM t_kategoriberita";
		$query=$this->db->query($sql); 
		return $query->result_array();
	}

	function get_id_metode_bunga(){  
        $sql = "SELECT * FROM t_perhitungan_bng";
		$query=$this->db->query($sql); 
		return $query->result_array();
	}
	
	function info_berita_kategori(){  
        $sql = "SELECT id_kategoriberita, nama_kategori FROM t_kategoriberita
JOIN t_berita USING(id_kategoriberita)
GROUP BY id_kategoriberita";
		$query=$this->db->query($sql);  
        return $query->result_array(); 
    }
	
	function berita(){  
        $sql = "SELECT * FROM t_kategoriberita
JOIN t_berita USING(id_kategoriberita)";
		$query=$this->db->query($sql);  
        return $query->result_array(); 
    }
	
	function tambah($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus($id_berita,$table,$kolom){  
        $this->db->where('id_berita',$id_berita);  
        $this->db->delete($table);  
    }
	
	function get_1_berita($id_berita){  
        $this->db->select()->from('t_berita')->where(array('id_berita'=>$id_berita));  
        $query=$this->db->get();  
        return $query->first_row('array');
    }
	
	function ubah_berita($id,$data){  
        $this->db->where('id_berita',$id);  
        $this->db->update('t_berita',$data);  
    }
	
	
	function norek(){  
        $sql = "SELECT a.new_norek, a.thn,a.bln,a.tgl,tgl_trans, a.norek, a.pokok, a.bunga, a.denda, a.new_norek, a.koderek
FROM tagihan a
group by a.new_norek
";
		$query=$this->db->query($sql);  
        return $query->result_array(); 
    }
	
	function tagihan(){  
        $sql = "SELECT a.new_norek, a.thn,a.bln,a.tgl,tgl_trans, a.norek, a.pokok, a.bunga, a.denda, a.new_norek, a.koderek
FROM tagihan a
ORDER BY a.norek ASC
limit 35001,40000
";
		$query=$this->db->query($sql);  
        return $query->result_array(); 
    }
	
	function cari_angsuran($koderek)
	{
		$sql = "SELECT a.tgl_trans,a.norek, a.koderek, a.pokok, a.bunga, a.denda, a.new_norek, a.koderek
FROM pembayaran a
WHERE a.koderek = '$koderek'";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}

	function tam_pro_dep()
	{
		$sql = "SELECT * from t_deposito";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}

	function tam_pro_tab()
	{
		$sql = "SELECT * from t_tabungan order by id_tabungan";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}

	function tam_pro_kre()
	{
		$sql = "SELECT * from t_kredit order by id_kredit";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}

	function g_lpk()
	{
		$sql = "SELECT * from t_lpk";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}

	function ambil_data_lpk($id_lpk)
	{
		$sql = "SELECT * from t_data_lpk where id_lpk=$id_lpk ";
		$query=$this->db->query($sql);  
        return $query->result_array();
	}
	
}  
?>  
