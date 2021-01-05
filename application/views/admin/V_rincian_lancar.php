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
        	<h4 class="card-title">KREDIT DEIBERIKAN</h4>
            <div class="table-responsive m-t-40">
            	<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                	<thead>
                    	<tr>
                        	<th>Perhitungan</th>
                            <?php foreach($bulan as $th){?>
                            <td colspan="4"><?php echo $th["nama_bulan"]?></td>
                            
                            <?php } ?>
                      	</tr>
                        
               		</thead>
                    <tbody>
                    	<tr>
                        	<td>Kolektibilitas</td>
                        	<?php foreach($bulan as $th){?>
                            <td>Baki Bebet</td>
                            <td>Noa</td>
                            <td>Nominal</td>
                            <td>Persentase</td>
                            <?php } ?>
                      	</tr>
                        <tr>
                        	<td>Kolektibilitas</td>
                        	<?php foreach($bulan as $th){?>
                            <td>Baki Bebet</td>
                            <td>Noa</td>
                            <td>Nominal</td>
                            <td>Persentase</td>
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