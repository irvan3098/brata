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
 <div class="col-lg-12">
 	<div class="card card-outline-primary">
    	<div class="card-header">
        	<h4 class="m-b-0 text-white">Upload Materi</h4>
     	</div><br>
        <div class="card-body">
        	<div class="form-validation">
            	<form class="form-valide" action="<?=site_url('admin/tulisan/tambah');?>" method="post">
				<div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Judul <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control" id="val-namban" name="judul" placeholder=" ">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-2 col-form-label" for="val-namban">Materi <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="file" class="form-control" id="val-namban" name="judul" placeholder="">
                            </div>
                            <div class="col-lg-4">
                        		<button type="submit" class="btn btn-primary">Upload</button>
                        	</div>
                	</div>
                    
         		</form>
         	</div>
     	</div>
    </div>
</div>
<!---->
<div class="col-lg-12">
	<div class="card card-outline-primary">
    	<div class="card-header">
        	<h4 class="m-b-0 text-white">Daftar Tulisan</h4>
        </div><br>
        <div class="card-body">
        	<?php //echo var_dump($dtulisan);?>
            <table id="myTable" class="table table-bordered table-striped">
            	<thead>
                	<tr>
                    	<th>Materi</th>
                        <th>Action</th>
                        </tr>
              	</thead>
                <tbody>
                	<?php foreach($dtulisan as $data){?>
                    <tr>
                    	<td><?php echo $data["judul"];?></td>
                        <td><?php echo $data["kategori"];?></td>
                        <td><?php echo $data["tgl_mulai"];?></td>
                        <td><?php echo $data["tgl_akhir"];?></td>
                        <td><?php echo $data["tulisan"];?></td>
                        <td>
                        	<a href="<?=base_url()?>admin/tulisan/hapus_tulisan/<?php echo $data['id_tulisan']?>">Hapus</a>
                            <a href="<?=base_url()?>admin/tulisan/ubah_tulisan/<?php echo $data['id_tulisan']?>">Ubah</a>
                     	</td>
                    </tr>
                    <?php }?>
                </tbody>
          	</table>  
        </div>
     </div>
 </div>
 </div>