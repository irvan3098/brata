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
        	<h4 class="m-b-0 text-white">Data ATI</h4>
        </div><br>
        <div class="card-body">
        	<form action="<?=site_url('Index/tambah');?>" method="post">
            	<div class="form-group">
                	<label>Kode</label>
                    <input type="text" class="form-control"  name="kode" value="/NA-BPR-BN/" readonly>
             	</div>
                <div class="form-group">
                	<label>Tanggal Pembelian</label>
                    <input type="date" class="form-control"  name="tgl_pembelian" value="" required>
             	</div>
                <div class="form-group">
                	<label>Nama Barang</label>
                    <input type="text" class="form-control"  name="nama_barang" value="" required>
             	</div>
                <div class="form-group">
                	<label>Jenis Barang</label>
                    <select name="jenis_barang" class="form-control">
                    	<option id="">Pilih</option>
                    </select>
               	</div>
                <div class="form-group">
                	<label>Merk Barang</label>
                    <input type="text" class="form-control"  name="merk_barang" value="" required>
             	</div>
                <div class="form-group">
                	<label>No Serial Barang</label>
                    <input type="text" class="form-control"  name="no_serial_barang" value="" required>
             	</div>
                <div class="form-group">
                	<label>Harga pembelian</label>
                    <input type="number" class="form-control"  name="harga_pembelian" value="" required>
             	</div>
                <div class="form-group">
                	<label>JT Penyusutan</label>
                    <input type="number" class="form-control"  name="jt_penyusutan" value="" required>
             	</div>
                <div class="form-group">
                	<label>Nilai Penyusutan</label>
                    <input type="number" class="form-control"  name="nilai_penyusutan" value="" required>
             	</div>
                <div class="form-group">
                	<label>Status</label>
                    <select name="status_barang" class="form-control">
                    	<option id="">Pilih</option>
                    </select>
               	</div>
                <div class="form-group">
                	<label>Keterangan</label>
                    <input type="text" class="form-control"  name="keterangan" value="" required>
             	</div>
                <div class="form-group">
                	<label>Posisi ATI</label>
                    <input type="text" class="form-control"  name="posisi_ati" value="" required>
             	</div>
                <div class="form-group">
                	<label>Peruntukan</label>
                    <input type="text" class="form-control"  name="peruntukan" value="" required>
             	</div>
                <div class="form-group">
                	<label>Harga Update</label>
                    <input type="number" class="form-control"  name="harga_update" value="" required>
             	</div>
                <button type="submit" class="btn btn-info"> <i class="fa fa-plus"></i> Tambah</button>
            </form> 
        </div>
     </div>
 </div>
<div class="col-lg-12">
	<div class="card">
    	<div class="card-body">
        	<h4 class="card-title">Data ATI</h4>
            <div class="table-responsive m-t-40">
            	<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                	<thead>
                    	<tr>
                        	<th>No</th>
                            <th>Kode</th>
                            <th>Tanggal Pembelian</th>
                            <th>Nama Barang</th>
                            <th>Jenis barang</th>
                            <th>Merk Barang</th>
                            <th>No Serial Barang</th>
                            <th>Harga Pembelian</th>
                            <th>JT Penyusutan</th>
                            <th>Nilai Penyusustan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Posisi ATI</th>
                            <th>Peruntukan</th>
                            <th>Harga Update</th>
                            <th>2019</th>
                            <th>Total Penyusutan</th>
                      	</tr>
               		</thead>
                    <tbody>
                    	<tr>
                        	<th>1</th>
                            <th>00110/NA-BPR-BN/2019</th>
                            <th>29/09/2019</th>
                            <th>Meja Sudut</th>
                            <th>ATI Lainnya</th>
                            <th>AWI</th>
                            <th>208310948038267</th>
                            <th>359000</th>
                            <th>96</th>
                            <th>3740</th>
                            <th>Baik - Terpakai</th>
                            <th>Dina awi</th>
                            <th>Kantor Pusat</th>
                            <th>Keur tempat gawe</th>
                            <th>337223</th>
                            <th>2019</th>
                            <th>34155</th>
                      	</tr>
                    </tbody>
         		</table>
        	</div>
    	</div>
 	</div>	
</div>
 </div>
 