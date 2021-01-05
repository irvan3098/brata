<div class="row">
 <div class="col-lg-12">
 <?php echo $this->session->userdata('message'); ?>
    </div>
 <div class="col-lg-12">
 	<div class="card card-outline-primary">
    	<div class="card-header">
        	<h4 class="m-b-0 text-white">Form Tulisan</h4>
     	</div><br>
        <div class="card-body">
        	<div class="form-validation">
            	<form class="form-valide" action="<?=site_url('admin/berita/tambah');?>" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Judul <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="text" class="form-control" id="val-namban" name="judul" placeholder="Masukan judul">
                            </div>
                	</div>
                    <div class="form-group row">
                    	<label class="col-lg-4 col-form-label" for="val-namban">Gambar <span class="text-danger">*</span></label>
                        	<div class="col-lg-6">
                            	<input type="file" class="form-control"  name="gambar">
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
                    	<th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Tulisan</th>
                        <th>Aksi</th>
                  	</tr>
              	</thead>
                <tbody>
                	<?php foreach($berita as $data_berita){?>
                    <tr>
                        <td><?php echo $data_berita["judul"];?></td>
                    	<td><?php echo $data_berita["nama_kategori"];?></td>
						<td><?php echo $data_berita["tulisan"];?></td>
                        <td><?php echo $data_berita["gambar"];?></td>
                        <td>
                        	<a href="<?=base_url()?>admin/berita/hapus/<?php echo $data_berita['id_berita']?>">Hapus</a>
                            <a href="<?=base_url()?>admin/berita/ubah/<?php echo $data_berita['id_berita']?>">Ubah</a>
                     	</td>
                    </tr>
                    <?php }?>
                </tbody>
          	</table>  
        </div>
    </div>
 </div>
 </div>