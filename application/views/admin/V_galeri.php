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
            	<form class="form-valide" action="<?=site_url('admin/tulisan/tambah');?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    	<label class="col-lg-2 col-form-label" for="val-studio">Kategori<span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                        	<select class="form-control" id="val-studio" name="kategori">
                            	<option value="">Pilih</option>
                                <?php
									foreach($list_kategori as $kategori)
									{
							   ?>
										<option value="<?php echo $kategori["id_kategoriberita"]?>">
										<?php echo $kategori["nama_kategori"];?>
                                        </option>
							   <?php
									}
							   ?>
                            </select>
                     	</div>
              	</div>
                <div class="form-group row">
                    	<label class="col-lg-2 col-form-label" for="val-namban">Judul <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control" id="val-namban" name="judul" placeholder="">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-2 col-form-label" for="val-namban">Gambar <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="file" class="form-control" id="val-namban" name="file" placeholder="">
                            </div>
                            
                	</div>
                    <div class="form-group row">
                    	<div class="col-lg-12">
                        	<textarea class="ckeditor" name="penjelasan"></textarea>
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
        	<h4 class="m-b-0 text-white">Daftar Berita</h4>
        </div><br>
        <div class="card-body">
        	<?php //echo var_dump($dtulisan);?>
            <table id="myTable" class="table table-bordered table-striped">
            	<thead>
                	<tr>
                    	<th>Kategori</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>tanggal</th>
                        <th>Tulisan</th>
                        <th>Aksi</th>
                        </tr>
              	</thead>
                <tbody>
                	<?php foreach($berita as $data){?>
                    <tr>
                    	<td><?php echo $data["id_kategoriberita"];?></td>
                        <td><?php echo $data["judul"];?></td>
                        <td><?php echo $data["gambar"];?></td>
                        <td><?php echo $data["tanggal"];?></td>
                        <td><?php echo $data["tulisan"];?></td>
                        <td>
                        	<a href="<?=base_url()?>admin/galeri/hapus_tulisan/<?php echo $data['id_tulisan']?>">Hapus</a>
                            <a href="<?=base_url()?>admin/galeri/ubah_tulisan/<?php echo $data['id_tulisan']?>">Ubah</a>
                     	</td>
                    </tr>
                    <?php }?>
                </tbody>
          	</table>  
        </div>
     </div>
 </div>
 </div>