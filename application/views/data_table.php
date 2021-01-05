<?php
		$tgl_bo = date("Y-m-d");
		$day = date('D', strtotime($tgl_bo));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		 

		if (!isset($datable))
		{  
			echo "Kosong";  
		}
		else
		{  
		  if (count($jum_stu) > 1)
			{		
				foreach($jum_stu as $row)
				{
					print( "
							$(function(){
								$('#studio".$row['id_studio']."').jqs({
								mode: 'read',
								data: 
									[
					");
										$tmp_id_studio=$row["id_studio"];
										foreach($datable as $row2)
										{
											$coba =$row2["tgl"];
											$msk=$row2["jam_msk"];
											$klr=$row2["jam_klr"];
											$day = date('D', strtotime($coba));
											$hr_bo = $dayList[$day];
											$temp_hari = array(1 => "Senin", 2 => "Selasa", 3 => "Rabu", 4 => "Kamis", 5 => "Jumat", 6 => "Sabtu", 7 => "Minggu");
											$hr_ = array_search($hr_bo,$temp_hari);
											$hr_ = $hr_ - 1;
											$id_stu=$row2["id_studio"];
											if($id_stu == $tmp_id_studio)
											{
												print("
														{						
															day: $hr_,
															periods: 
															[
																{
																	start: '$msk:00',
																	end: '$klr:00',
																	title: '".$row2["nama_band"]."'
																}	
															]
														},
													");
											}
										}
					print("			
									]						
								});
							});
					");  					
				}	
			}else
			{
				foreach ($jum_stu as $row)
						{
							print( "
							$(function(){
								$('#studio".$row['id_studio']."').jqs({
								mode: 'read',
								data: 
									[
							");
							foreach($datable as $row)
							{
								$coba =$row["tgl"];
								$msk=$row["jam_msk"];
								$klr=$row["jam_klr"];
								$day = date('D', strtotime($coba));
								$hr_bo = $dayList[$day];
								$temp_hari = array(1 => "Senin", 2 => "Selasa", 3 => "Rabu", 4 => "Kamis", 5 => "Jumat", 6 => "Sabtu", 7 => "Minggu");
								$hr_ = array_search($hr_bo,$temp_hari);
								$hr_ = $hr_ - 1;
								print( "
														{						
															day: $hr_,
															periods: 
															[
																{
																	start: '$msk:00',
																	end: '$klr:00',
																	title: '".$row["nama_band"]."'
																}
															]	
														},
										
								");  
							}
							print("
									]						
									});
								});
					");  
				}
				
			}
		}
		
		
?>