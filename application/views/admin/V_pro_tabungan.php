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
        	<h4 class="m-b-0 text-white">Form tabungan</h4>
     	</div><br>
        <div class="card-body">
        	<div class="form-validation">
            	<form class="form-valide" action="<?=site_url('admin/produk/tambah');?>" method="post">
                	<div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Nama tabungan <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control" id="val-namban" name="judul" placeholder="Nama tabungan">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Minimal saldo <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="gambar" placeholder="Masukan Nominal">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Biaya Administrasi <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="by_adm" placeholder="Masukan nominal">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<div class="col-lg-12">
                        	<textarea class="ckeditor" name="tulisan"></textarea>
        				</div>
                  	</div>
                    <div class="form-group row">
                    	<div class="col-lg-8">
                        	<button type="submit" class="btn btn-primary">Simpan</button>
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
                    	<th>Nama Produk</th>
                        <th>Min saldo</th>
                        <th>Biaya ADM</th>
                        <th>Penjelasan</th>
                        <th>Aksi</th>
                  	</tr>
              	</thead>
                <tbody>
                	<?php foreach($pro_tab as $data_){?>
                    <tr>
                        <td><?php echo $data_["nama_pro_tabungan"];?></td>
                    	<td><?php echo $data_["min_saldo"];?></td>
						<td><?php echo $data_["biaya_adm"];?></td>
                        <td><?php echo $data_["penjelasan_produk"];?></td>
                        <td>
                        	<a href="<?=base_url()?>admin/berita/hapus/<?php echo $data_['id_tabungan']?>">Hapus</a>
                            <a href="<?=base_url()?>admin/berita/ubah/<?php echo $data_['id_tabungan']?>">Ubah</a>
                     	</td>
                    </tr>
                    <?php }?>
                </tbody>
          	</table>  
        </div>
     </div>
 </div>
 </div>