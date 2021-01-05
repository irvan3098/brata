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
	<div class="card card-outline-primary">
    	<div class="card-header">
        	<h4 class="m-b-0 text-white">Data Pegawai</h4>
        </div><br>
        <div class="card-body">
        </div>
     </div>
 </div>
<div class="col-lg-12">
	<div class="card">
    	<div class="card-body">
        	<h4 class="card-title">Data pegawai</h4>
            <div class="table-responsive m-t-40">
            	<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                	<thead>
                    	<tr>
                        	<th>NIP</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>TANGGAL MASUK</th>
                            <th>JABATAN</th>
                            <th>PENDIDIKAN</th>
                            <th>FOTO</th>
                            </tr>
               		</thead>
                    <tbody>
                    <?php foreach($pegawai as $d_pegawai){?>
                    	<tr>
                        	<td><?php echo $d_pegawai["nip"];?></td>
                            <td><?php echo $d_pegawai["nama"];?></td>
                            <td><?php echo $d_pegawai["alamat"];?></td>
                            <td><?php echo $d_pegawai["tgl_masuk"];?></td>
                            <td><?php echo $d_pegawai["jabatan"];?></td>
                            <td><?php echo $d_pegawai["pendidikan"];?></td>
                            <td><img src="<?php echo base_url()."/assets/admin/images/pegawai/".$d_pegawai["foto"];?>" width="100" height="100"></td>
                      	</tr>
                  	<?php }?>
                    </tbody>
         		</table>
        	</div>
    	</div>
 	</div>	
</div>
 </div>
 