<?php 
class Mdl_va extends CI_Model
{  
	function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url','form'));
		}
	
	//booking
	function get_id_studio($id){  
        $sql = "SELECT p.id_pengguna, s.id_studio, s.nama_studio,s.harga FROM studio AS s
JOIN pengguna AS p USING(id_pengguna)
JOIN bio_data AS b USING(id_biodata) where p.id_pengguna = $id";
		$query=$this->db->query($sql); 
		
		$dd[''] = 'Pilih';
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id_studio] = "Studio ".$row->nama_studio;
            }
        } 
        return $dd;  
    }
	
	
	//profil
	function get_profil($id_s){  
        $sql = "select * from bio_data join pengguna using(id_biodata) where id_pengguna = $id_s";
		$query=$this->db->query($sql);  
        return $query->result_array();  
    }
	
	function update_profil($id_b,$data){  
        $this->db->where('id_biodata',$id_b);  
        $this->db->update('bio_data',$data);  
    }  

	//jadwal	
	function data_table($id,$tgl1,$tgl2){  
        $sql_query = "SELECT id_pengguna, id_studio,nama_band,tgl,jam_msk, jam_klr FROM studio JOIN jadwal USING(id_studio) WHERE id_pengguna =$id  and tgl between '$tgl1' and '$tgl2'";  
        $query=$this->db->query($sql_query);  
        return $query->result_array();  
    }
	
	function data_booking($idpengguna,$tgl1,$tgl2){  
        $sql_query = "SELECT id_studio,id_jadwal ,id_pengguna,nama_band,tgl,jam_msk, jam_klr FROM studio JOIN jadwal USING(id_studio) WHERE id_pengguna = $idpengguna and tgl between '$tgl1' and '$tgl2'";  
        $query=$this->db->query($sql_query);  
        return $query->result_array();
	}
	
	//crud
	function data_tulisan($idpengguna){  
        $sql_query = "SELECT * from tulisan WHERE id_pengguna = $idpengguna";  
        $query=$this->db->query($sql_query);  
        return $query->result_array();
	}
	
	function tambah($data,$table){
		$this->db->insert($table,$data);
	}
	
	function delete_tulisan($idtulisan){  
        $this->db->where('id_tulisan',$idtulisan);  
        $this->db->delete('tulisan');  
    }
	
	function get_1_tulisan($idtulisan){  
        $this->db->select()->from('tulisan')->where(array('id_tulisan'=>$idtulisan));  
        $query=$this->db->get();  
        return $query->first_row('array');
    }
	
	function ubah_tulisan($id,$data){  
        $this->db->where('id_tulisan',$id);  
        $this->db->update('tulisan',$data);  
    }

	function delete_jadwal($idjadwal){  
        $this->db->where('id_jadwal',$idjadwal);  
        $this->db->delete('jadwal');  
    }

}
?>
