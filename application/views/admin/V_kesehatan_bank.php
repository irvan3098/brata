 <div class="row">
 <div class="col-lg-12">
	<?php if(($_GET['pesan']) == "salah"){?>
        <div class="alert alert-danger alert-dismissible fade show">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Tolong cek kembali isian anda.
        </div>
        <?php }elseif(($_GET['pesan']) == "benar"){?>
        <div class="alert alert-success alert-dismissible fade show">
        	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        	Data berhasil disimpan
        </div>
		<?php }?>
    </div>
 
<!---->
<div class="col-lg-12">
	<div class="card">
    	<div class="card-body">
        	<h4 class="card-title">TKS</h4>
            <div class="table-responsive m-t-40">
            	<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                	<thead>
                    	<tr>
                        	<th>Perhitungan</th>
                            <?php foreach($bulan as $th){?>
                            <th><?php echo $th["nama_bulan"]?></th>
                            <?php } ?>
                      	</tr>
               		</thead>
                    <tbody>
                    	<tr>
                        	<td>Total ATMR</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<td>Modal Inti</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<th colspan="13" bgcolor="#11E4B9">Modal Pelengkap</th>   
                      	</tr>
                        <tr>
                        	<td>Jumlah Modal</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<td>Modal Minimum</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<td>ROE</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<td>CAR/KPMM</td>
                            <?php //foreach($car as $data_car){?>
                            <th></th>
                            <?php //} ?>
                      	</tr>
                        <tr>
                        	<th bgcolor="#11E4B9">Perhitungan KAP</th>
                            <?php foreach($bulan as $th){?>
                            <th bgcolor="#11E4B9"><?php echo $th["nama_bulan"]?></th>
                            <?php } ?>
                      	</tr>
                        <?php 
							$j=0;
							foreach($kol as $dat_kol){?>
                        <tr>
                        	<td>
								<?php 
								if($dat_kol[0] == "L"){
								?>
								<a href="<?=site_url('Kesehatan_bank/rincian_lancar');?>"><?php echo $dat_kol[0];?></a>
								<?php
                                }else{
									echo $dat_kol[0];
								}
								?>
                          	</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									
									$jumlah[$i] = $jumlah[$i] + $dat_kol[$i];
									echo number_format($dat_kol[$i],0,',','.');
								?>
                          	</td>
							<?php }?>
                        </tr>
                        <?php $j++; }?>
                        <tr>
                        	<td>JUMLAH</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									echo number_format($jumlah[$i],0,',','.');
								?>
                          	</td>
							<?php }?>
                        </tr>
                        <?php 
							$j=0;
							foreach($kol as $dat_kol){
							if($dat_kol[0] != "L" )
								{for($i=1; $i<=12; $i++){
									if($dat_kol[0] == "D" )
									{
										$jumlah_pro[$i] = $jumlah_pro[$i] + $dat_kol[$i];
										//echo number_format(($dat_kol[$i]*0.75),0,',','.');
									}elseif($dat_kol[0] == "KL")
									{
										$jumlah_pro[$i] = $jumlah_pro[$i] + $dat_kol[$i];
										//echo number_format(($dat_kol[$i]*0.50),0,',','.');
									}elseif($dat_kol[0] == "M")
									{
										$jumlah_pro[$i] = $jumlah_pro[$i] + $dat_kol[$i];
										//echo number_format(($dat_kol[$i]*1),0,',','.');
									}
								 }
                         } $j++; }?>
                        <tr>
                        	<td>Aktiva Produktif </td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									echo number_format($jumlah_pro[$i],0,',','.');
								?>
                          	</td>
							<?php }?>
                        </tr>
                        <?php 
							$j=0;
							foreach($kol as $dat_kol){
							
						?>	
                        <tr>
                        	<td><?php echo $dat_kol[0]." % "?></td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									if($dat_kol[0] == "D" )
									{
										//npl
										$jumlah_kldm[$i] = $jumlah_kldm[$i] + $dat_kol[$i];
										//total
										$jumlah_p[$i] = $jumlah_p[$i] + ($dat_kol[$i]*0.75);
										echo number_format(($dat_kol[$i]*0.75),0,',','.');
									}elseif($dat_kol[0] == "KL")
									{
										//npl
										$jumlah_kldm[$i] = $jumlah_kldm[$i] + $dat_kol[$i];
										//total
										$jumlah_p[$i] = $jumlah_p[$i] + ($dat_kol[$i]*0.50);
										echo number_format(($dat_kol[$i]*0.50),0,',','.');
									}elseif($dat_kol[0] == "L")
									{
										$jumlah_l[$i] = $jumlah_l[$i] + $dat_kol[$i];
									}
									elseif($dat_kol[0] == "M")
									{
										//npl
										$jumlah_kldm[$i] = $jumlah_kldm[$i] + $dat_kol[$i];
										//total
										$jumlah_p[$i] = $jumlah_p[$i] + ($dat_kol[$i]*1);
										echo number_format(($dat_kol[$i]*1),0,',','.');
									}
									
								?>
                          	</td>
							<?php }?>
                        </tr>
                        <?php  $j++; }?>
                        <tr>
                        	<td>JUMLAH %</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									echo number_format($jumlah_p[$i],0,',','.');
								?>
                          	</td>
							<?php }?>
                        </tr>
                        <tr>
                        	<td>KAP(Netto)</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td>
								<?php 
									echo number_format((($jumlah_p[$i]/$jumlah[$i])*100),2);
								?>
                          	</td>
							<?php }?>
                      	</tr>
                        <tr>
                        	<td>NPL(Netto)</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td><?php echo number_format(($jumlah_kldm[$i]/$jumlah_l[$i])*100,2);?></td>
							<?php } ?>
                      	</tr>
                        <tr>
                        	<td>NPL(Gross)/Bruto</td>
                            <?php for($i=1; $i<=12; $i++){?>
                            <td><?php echo number_format($jumlah_pro[$i]/($jumlah[$i]/100),2);?></td>
							<?php } ?>
                        </tr>
                    
            	    <tr> </tr>
            	    <tr>
            	      <td>KAP(Kredit+ABA)</td>
            	      <?php //foreach($car as $data_car){?>
            	      <td></td>
            	      <?php //} ?>
            	      </tr>
            	    <tr>
            	      <td colspan="13" bgcolor="#11E4B9">Rentabilitas</td>   
            	      </tr>
            	    <tr>
            	      <td>ROA</td>
            	      <?php //foreach($car as $data_car){?>
            	      <td></td>
            	      <?php //} ?>
            	      </tr>
            	    <tr>
            	      <td>BOPO</td>
            	      <?php //foreach($car as $data_car){?>
            	      <td></td>
            	      <?php //} ?>
            	      </tr>
            	    <tr>
            	      <td>LDR</td>
            	      <?php foreach($ldr as $data_ldr){?>
            	      <td><?php echo number_format($data_ldr["nilai"],2)?></td>
            	      <?php } ?>
            	   	</tr>
            	    <tr>
            	      <td><a href="<?=site_url("admin/Kesehatan_bank/grafik_cashratio")?>">Cash Ratio</a></td>
            	      <?php foreach($car as $data_car){?>
            	      <td><?php echo number_format($data_car["nilai"],2)?></td>
            	      <?php } ?>
            	      </tr>
          	    </tbody>
          	  </table>
        	</div>
    	</div>
 	</div>	
</div>
 </div>
 <?php
 echo "<pre>";
print_r($kol);
 ?>