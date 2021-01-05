<section id="inner-headline">
    <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Produk <b>Tabungan</b></h2>
            </div>
          </div>
    </div>
</section>
<section id="content">
    <div class="container">
                <div class="row">
                    <div class="span12">
                        <h4>Jenis - Jenis Produk <strong>Tabungan</strong></h4>
                        <ul class="nav nav-tabs">
                            <?php 
                              $i=1;
                              foreach ($pro_tab as $data) {
                                if($i == 1)
                                {
                              ?>
                                  <li class="active"><a href="#<?php echo $data["nama_pro_tabungan"];?>" data-toggle="tab"><?php echo $data["nama_pro_tabungan"];?></a></li>
                              <?php    
                                }else {
                              ?>
                                  <li><a href="#<?php echo $data["nama_pro_tabungan"];?>" data-toggle="tab"><?php echo $data["nama_pro_tabungan"];?></a></li>
                              
                              <?php    
                                }
                              $i++;
                              }
                            ?>
                        </ul>
                        <?php 
                            $j=1;
                            foreach ($pro_tab as $data) {
                            if($j == 1)
                            {
                        ?>
                              <div class="tab-content">
                                  <div class="tab-pane active" id="<?php echo $data["nama_pro_tabungan"];?>">
                                  <p>
                                  <?php echo $data["penjelasan_produk"];?>
                                  </p>
                              </div>
                        <?php
                            }else {
                        ?>
                              <div class="tab-pane" id="<?php echo $data["nama_pro_tabungan"];?>">
                                <p>
                                <?php echo $data["penjelasan_produk"];?>
                                </p>
                              </div>
                        <?php
                            }
                            $j++;
                            }
                        ?>
          
                    </div>
                </div>
              </div>
          </div>
 </section>
 