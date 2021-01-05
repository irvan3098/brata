<section id="inner-headline">
    <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Produk <b>Kredit</b></h2>
            </div>
          </div>
    </div>
</section>
<section id="content">
      <div class="container">
        <div class="row">
          <div class="span3">
            <h4>Simulasi Prodak</h4>
           <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span3 form-group">
                  <input type="text" class="form-control" placeholder="Besar Pinjaman" name="plafond" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="text" class="form-control" placeholder="Jangka Waktu" name="jkw" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="text" class="form-control" placeholder="Bunga" name="bunga" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit" value="Lihat" name="lihat">Lihat</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <div class="span9">
            <div class="row">
              <div class="span9">
                <h4>Jenis - Jenis Produk <strong>Kredit</strong></h4>
                <ul class="nav nav-tabs">
                            <?php 
                              $i=1;
                              foreach ($pro_kre as $data) {
                                if($i == 1)
                                {
                              ?>
                                  <li class="active"><a href="#<?php echo $data["nama_pro_kre"];?>" data-toggle="tab"><?php echo $data["nama_pro_kre"];?></a></li>
                              <?php    
                                }else {
                              ?>
                                  <li><a href="#<?php echo $data["nama_pro_kre"];?>" data-toggle="tab"><?php echo $data["nama_pro_kre"];?></a></li>
                              
                              <?php    
                                }
                              $i++;
                              }
                            ?>
                </ul>
                
                <?php 
                            $j=1;
                            foreach ($pro_kre as $data) {
                            if($j == 1)
                            {
                        ?>
                              <div class="tab-content">
                                  <div class="tab-pane active" id="<?php echo $data["nama_pro_kre"];?>">
                                  <p>
                                  <?php echo $data["persyaratan"];?>
                                  </p>
                              </div>
                        <?php
                            }else {
                        ?>
                              <div class="tab-pane" id="<?php echo $data["nama_pro_kre"];?>">
                                <p>
                                <?php echo $data["persyaratan"];?>
                                </p>
                              </div>
                        <?php
                            }
                            $j++;
                            }
                        ?>  
              
              </div>
          </div>
          <?php if(isset($_POST["lihat"])){?>
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Angsuran Ke</th>
                  <th>Angsuran Pokok</th>
                  <th>Angsuran Bunga</th>
                  <th>Angsuran Per-bulan</th>
                  <th>Total Angsuran</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $os_akhir=$_POST["plafond"];
                  echo $bunga=(2.5*$_POST["jkw"])/$_POST["jkw"];
                  $perhitungan_bunga=$os_akhir*$bunga;
                  for($i=1; $i<=$_POST["jkw"]; $i++){
                    $angsuran_pokok=$_POST["plafond"]/$_POST["jkw"];
                    $angsuran_bunga=($_POST["plafond"]*($_POST["jkw"]/100))/$_POST["jkw"];
                    $os_akhir=$os_akhir-$angsuran_pokok;
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo rupiah($angsuran_pokok);?></td>
                  <td><?php echo rupiah($perhitungan_bunga/100);?></td>
                  <td><?php echo rupiah($angsuran_bunga+$angsuran_pokok);?></td>
                  <td><?php echo rupiah($os_akhir);?></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          <?php } ?>
 </section>
 <?php 
  function rupiah($angka){
	
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
   
  }
 ?>