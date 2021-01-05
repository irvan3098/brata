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
<div class="col-sm-12 col-md-12">
	<div class="panel">
    	<div class="panel-heading">
        	<div class="panel-title">
            	<h4>Cash Ratio</h4>
           	</div>
    	</div>
        <div class="panel-body">
            <canvas id="barChart"></canvas>
        </div>
 	</div>
 </div>
 </div>
 <?php
 echo "<pre>";
print_r($car);
 ?>