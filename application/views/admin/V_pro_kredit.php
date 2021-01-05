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
        	<h4 class="m-b-0 text-white">Form kredit</h4>
     	</div><br>
        <div class="card-body">
        	<div class="form-validation">
            	<form class="form-valide" action="<?=site_url('admin/produk/tambah');?>" method="post">
                	<div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Nama kredit <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control" id="val-namban" name="nama_kredit" placeholder="Nama Kredit">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Minimal Pengajuan <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="min_pengajuan" placeholder="Masukan Nominal">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Maximum Pengajuan <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="max_pengajuan" placeholder="Masukan nominal">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Minimal Jangka Waktu <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="min_jkw" placeholder=" ">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Maximal Jangka Waktu <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control"  name="max_jkw" placeholder=" ">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-studio">Kategori<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                        	<select class="form-control" id="val-studio" name="kategori">
                            	<option value="">Pilih</option>
                                <?php
									foreach($list_kategori as $kategori)
									{
							   ?>
										<option value="<?php echo $kategori["id_perhitungan_bunga"]?>">
										<?php echo $kategori["metode"];?>
                                        </option>
							   <?php
									}
							   ?>
                         
                            </select>
                     	</div>
              		</div>
                    <div class="form-group row">
                    	<div class="col-lg-12">
                        	<textarea class="ckeditor" name="penjelasan"></textarea>
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
        	<h4 class="m-b-0 text-white">Daftar Prodak Kredit</h4>
        </div><br>
        <div class="card-body">
        	<?php //echo var_dump($dtulisan);?>
            <table id="myTable" class="table table-bordered table-striped">
            	<thead>
                	<tr>
                    	<th>Nama Produk</th>
                        <th>Minimal Pengajuan</th>
                        <th>Maximal Pengajuan</th>
                        <th>Minimal JKW</th>
                        <th>Maximal JKW</th>
                        <th>Penjelasan</th>
                        <th>Aksi</th>
                  	</tr>
              	</thead>
                <tbody>
                	<?php foreach($pro_kre as $data_){?>
                    <tr>
                        <td><?php echo $data_["nama_pro_kre"];?></td>
                    	<td><?php echo $data_["min_pengajuan"];?></td>
						<td><?php echo $data_["max_pengajuan"];?></td>
                        <td><?php echo $data_["min_jkw"];?></td>
						<td><?php echo $data_["max_jkw"];?></td>
                        <td><?php echo $data_["penjelasan"];?></td>
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