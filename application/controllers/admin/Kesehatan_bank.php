<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
class Kesehatan_bank extends CI_Controller
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
		$bulan = $this->mdl_brata->tampilkan_bulan();
		$data_konten = array(
			'bulan' => $bulan,
			'kol'	=> $this->menghitung_kol(),
			'car'	=> $this->cash_ratio(),
			'ldr'	=> $this->ldr()
		);
		
		$konten			= $this->load->view('admin/V_kesehatan_bank',$data_konten,true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		//echo var_dump($this->menghitung_kol());
		
		$this->load->view('admin/template',$data);
	}
	
	function cash_ratio()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		foreach($bulan as $th)
		{
			$hasil_hitung = 0;
			$id = $th["id_bln_thn_p"];
			//$car[$id]["bulan"] = $th["nama_bulan"]." = ";
			$tmp_car = $this->mdl_brata->request_cashratio($th["id_bln_thn_p"]);
			foreach($tmp_car as $data_car)
			{
				if(($data_car["kode_perk"] == 101) || ($data_car["kode_perk"] == 10301) || ($data_car["kode_perk"] == 10302))
				{
					$tmp_hit1 = $tmp_hit1 + $data_car["saldo_akhir"];
				}else{
					$tmp_hit2 = $tmp_hit2 + $data_car["saldo_akhir"];
				}
			}
			$hasil_hitung = ($tmp_hit1/$tmp_hit2)*100;
			$car[$id]["nilai"] = $hasil_hitung;
			$tmp_hit1 = 0;
			$tmp_hit2 = 0;
			$hasil_hitung = 0;
		}
		return $car;
	}
	
	function rincian_cash_ratio()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		foreach($bulan as $th)
		{
			$hasil_hitung = 0;
			$id = $th["id_bln_thn_p"];
			//$car[$id]["bulan"] = $th["nama_bulan"]." = ";
			$tmp_car = $this->mdl_brata->request_cashratio($th["id_bln_thn_p"]);
			foreach($tmp_car as $data_car)
			{
				if(($data_car["kode_perk"] == 101))
				{
					$rincian_car[$id]["101"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 10301)){
					$rincian_car[$id]["10301"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 10302)){
					$rincian_car[$id]["10302"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 201)){
					$rincian_car[$id]["201"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 202)){
					$rincian_car[$id]["202"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 203)){
					$rincian_car[$id]["203"] = $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 205)){
					$rincian_car[$id]["205"] = $data_car["saldo_akhir"];
				}
			}
			
		}
		return $rincian_car;
	}
	
	function grafik_cashratio()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		$data_konten = array(
			'bulan' => $bulan,
			'kol'	=> $this->menghitung_kol(),
			'car'	=> $this->cash_ratio(),
			'rincian_car' => $this->rincian_cash_ratio(),
			'ldr'	=> $this->ldr()
		);
		
		$konten			= $this->load->view('admin/V_bar_cr',$data_konten,true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'	=> $sidebar,
			'konten'	=> $konten,
			'car'		=> $this->cash_ratio(),
			'rincian_car' => $this->rincian_cash_ratio(),
			'bulan' 	=> $bulan
        );
        
		//echo var_dump($this->menghitung_kol());
		
		$this->load->view('admin/template',$data);
	}
	
	
	function ldr()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		foreach($bulan as $th)
		{
			$hasil_hitung = 0;
			$id = $th["id_bln_thn_p"];
			//$car[$id]["bulan"] = $th["nama_bulan"]." = ";
			$tmp_car = $this->mdl_brata->request_perhitungan($th["id_bln_thn_p"],3);
			foreach($tmp_car as $data_car)
			{
				if(($data_car["kode_perk"] == 203) || ($data_car["kode_perk"] == 202) || ($data_car["kode_perk"] == 206) || ($data_car["kode_perk"] == 205) || ($data_car["kode_perk"] == 3))
				{
					$tmp_hit1 = $tmp_hit1 + $data_car["saldo_akhir"];
				}elseif(($data_car["kode_perk"] == 10401)){
					$tmp_hit2 = $tmp_hit2 + $data_car["saldo_akhir"];
				}
			}
			$hasil_hitung = ($tmp_hit2/$tmp_hit1)*100;
			$ldr[$id]["nilai"] = $hasil_hitung;
			$tmp_hit1 = 0;
			$tmp_hit2 = 0;
			$hasil_hitung = 0;
		}
		
		return $ldr;
	}
	
	function menghitung_kol()
	{
		$jum_kol = $this->mdl_brata->request_jum_kol();
		$a = 0;
		foreach($jum_kol as $hkol)
		{
			$kol = $hkol["kol"];
			//echo $kol;
			$data_f[$a][] = $kol;
			
			$bulan = $this->mdl_brata->tampilkan_bulan();
			foreach($bulan as $th)
			{
				$id = $th["id_bln_thn_p"];
				//echo $id." | ";
				$data_f[$a][$id] = " ";
				$dat_kol = $this->mdl_brata->request_kol($id,$kol);
				foreach($dat_kol as $data_kol)
				{
					if(($th["id_bln_thn_p"] == $data_kol["id_bln_thn_p"]) && ($data_kol["id_bln_thn_p"] == $id) )
					{
						//echo $data_kol["jum_baki"]." | ";
						$data_f[$a][$id] = $data_kol["jum_baki"];
					}
				}
			}
			//echo "<br>";
			$a++;
		}
		//echo "<pre>";
		//print_r($data_f);
		return $data_f;
		
	}
	
	
	function rincian_lancar()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		$data_konten = array(
			'bulan' => $bulan,
			'kol'	=> $this->menghitung_kol(),
			'car'	=> $this->cash_ratio()
		);
		
		$konten			= $this->load->view('admin/V_rincian_lancar',$data_konten,true);
		$sidebar		= $this->load->view('admin/sidebar',array(),true);
		$data = array(
            'sidebar'		=> $sidebar,
			'konten'		=> $konten
        );
        
		//echo var_dump($this->menghitung_kol());
		
		$this->load->view('admin/template',$data);
	}
	
	function hitung_dpk123()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		foreach($bulan as $data_bln)
		{
			$id = $data_bln["id_bln_thn_p"];
			for($i=1; $i<=3; $i++)
			{
				$cari_dpk = $this->mdl_brata->hitung_dpk($id,$i);
				foreach($cari_dpk as $hit_dpk)
				{
					$dat_dpk[$id]["dpk"][$i] = "DPK ".$hit_dpk["FT_Pokok"];
					$dat_dpk[$id]["debet"][$i] = $hit_dpk["debet"];
					$dat_dpk[$id]["noa"][$i] = $hit_dpk["noa"];
					$j = $id;
					if($j >= 1)
					{
						$back_bulan = $j-1;
					}
					$dat_dpk[$id]["nominal"][$i] =  $hit_dpk["debet"]-($dat_dpk[$back_bulan]["debet"][$i]);
					
					$dat_dpk[$id]["persentase"][$i] = number_format(((($hit_dpk["debet"]-$dat_dpk[$id-1]["debet"][$i])/$hit_dpk["debet"])*100),2);
				}
			}
			$i=0;
		}
		
		//return $dat_dpk;
		echo "<pre>";
		print_r($dat_dpk);
		
	}
	
	function bopo()
	{
		$bulan = $this->mdl_brata->tampilkan_bulan();
		foreach($bulan as $data_bln)
		{
			echo "bulan data = ".$data_bln["bulan_ke"]."<br>";
			echo "bulan ke belakang = ".$i = ($data_bln["bulan_ke"]-1) - 12,"<br>";
			
				echo "bulan ".abs($i)." tahun =".(date("Y")-1)."<br>";
				$from_b = 14-abs($i);
				for($bulan_m= $from_b; $bulan_m<=12; $bulan_m++)
				{
					echo "bulan min ".$bulan_m."<br>";
				}
			
				$from_m = 12-abs($i);
				echo "bulan data tahun sekarang = ".$from_m."<br>";
				for($bulan_s=1; $bulan_s<=$from_m; $bulan_s++)
				{
					echo "bulan min ".$bulan_s."<br>";
				}
			echo "============================"."<br>";
			
			
		}
		
		
	}
	
}

?>