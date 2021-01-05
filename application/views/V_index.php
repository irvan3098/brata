<section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="<?php echo base_url();?>assets/user/img/slides/nivo/bg-1.png" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="<?php echo base_url();?>assets/user/img/slides/nivo/bg-2.png" alt="" title="#caption-2" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2>Apa itu <strong>OJK</strong></h2>
                  <p>
                  Otoritas Jasa Keuangan (OJK) adalah lembaga Negara yang berfungsi menyelenggarakan sistem pengaturan dan pengawasan yang terintegrasi terhadap keseluruhan kegiatan di dalam sektor jasa keuangan baik di sektor perbankan, pasar modal, dan sektor jasa keuangan non-bank seperti Asuransi, Dana Pensiun, Lembaga Pembiayaan, dan Lembaga Jasa Keuangan lainnya.  
                  </p>
                  <a href="<?=site_url("baca/ojk");?>" class="btn btn-theme">Baca</a>
                </div>
              </div>
              <!-- Slide #2 caption -->
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Apa itu <strong>LPS</strong></h2>
                  <p>
                  LPS merupakan lembaga independen yang berfungsi menjamin simpanan nasabah penyimpan dan turut aktif memelihara stabilitas sistem perbankan sesuai kewenangannnya.
                  </p>
                  <a href="<?=site_url("baca/lps")?>" class="btn btn-theme">Baca</a>
                </div>
              </div>
              <!-- Slide #3 caption -->
              
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>
<section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>Pengajuan <span class="highlight"><strong>Kredit </strong></span> Online</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Klik disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section id="content">
    	<div class="container">
        <div class="row">
          <div class="span12">
            <h4>Produk<strong> Kami</strong></h4>
          </div>
          <div class="span4">
            <div class="pricing-box-alt">
              <div class="pricing-heading">
                <h3>Tabungan <strong>Mitra</strong></h3>
              </div>
              <div class="pricing-terms">
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="icon-ok"></i> Mudah</li>
                  <li><i class="icon-ok"></i> Cepat</li>
                  <li><i class="icon-ok"></i> Aman</li>
                </ul>
              </div>
              <div class="pricing-action">
                <a href="<?=site_url("produk/tabungan")?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Lihat</a>
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="pricing-box-alt special">
              <div class="pricing-heading">
                <h3><strong>Deposito</strong></h3>
              </div>
              <div class="pricing-terms">
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="icon-ok"></i> Mudah</li>
                  <li><i class="icon-ok"></i> Cepat</li>
                  <li><i class="icon-ok"></i> Aman</li>
                </ul>
              </div>
              <div class="pricing-action">
                <a href="<?=site_url("produk/deposito")?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Lihat</a>
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="pricing-box-alt">
              <div class="pricing-heading">
                <h3>Kredit <strong>Umum</strong></h3>
              </div>
              <div class="pricing-terms">
              </div>
              <div class="pricing-content">
                <ul>
                  <li><i class="icon-ok"></i> Pas photo suami istri</li>
                  <li><i class="icon-ok"></i> Fotocopy KTP suami istri 3 lembar</li>
                  <li><i class="icon-ok"></i> Fotocopy kartu keluarga</li>
                  <li><i class="icon-ok"></i> Saldo BPJS dan kartu</li>
                  <li><i class="icon-ok"></i> Fotocopy ID card dan slip gaji terakhir</li>
                  <li><i class="icon-ok"></i> Persyaratan harus lengkap</li>
                </ul>
              </div>
              <div class="pricing-action">
                <a href="<?=site_url("produk/kredit")?>" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Lihat</a>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="pricing-heading">
        	<h3>Informasi <strong>Terbaru</strong></h3>
        	</div>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <ul class="portfolio-categ filter">
          <li class="all active"><a href="#">All</a></li>
          <?php foreach($kategori as $dat_kategori){?>
          <li class="<?php echo $dat_kategori["nama_kategori"];?>"><a href="#" title=""><?php echo $dat_kategori["nama_kategori"];?></a></li>
          <?php }?>
        </ul>
        <div class="clearfix">
        </div>
        <div class="row">
          <section id="projects">
            <ul id="thumbs" class="portfolio">
              <!-- Item Project and Filter Name -->
              <?php foreach($berita as $data_berita) {?>
                <li class="item-thumbs span3 design" data-id="id-0" data-type="<?php echo $data_berita["nama_kategori"]?>">
                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $data_berita["judul"]?>" href="<?php echo base_url();?>images/berita/<?php echo $data_berita["gambar"]?>">
                <span class="overlay-img"></span>
                <span class="overlay-img-thumb font-icon-plus"></span>
                </a>
                <!-- Thumb Image and Description -->
                <img src="<?php echo base_url();?>images/berita/<?php echo $data_berita["gambar"]?>" alt="<?php echo $data_berita["tulisan"]?>">
                </li>
              <?php }?>
              <!-- End Item Project -->
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading"></h5>
              <address>
              	<strong>Kantor </strong><br>
				Jl. Terusan Cibaduyut No. 12B<br>
				Bandung 40236
				</address>
              <p>
                <i class="icon-phone"></i> (022)-54428002<br>
                <i class="icon-envelope-alt"></i> bpr.bratanusantara@gmail.com
              </p>
            </div>
          </div>
          <div class="span3">
           <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span3 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span3 margintop10 form-group">
                  <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
        
            <div class="span6">
              <h2>BPR Brata Nusantara terdaftar dan diawasi oleh</h2>
            </div>
            <div class="span6">
              <ul class="social-network">       
              <li><a href="#" data-placement="bottom" title="Linkedin"><img src="images/logo/bpr.png" width="50" height="80" /></a></li>
              <li><a href="#" data-placement="bottom" title="Twitter"><img src="images/logo/ojk.png" width="150" height="80" /></a></li>
              <li><a href="#" data-placement="bottom" title="Twitter"><img src="images/logo/lps2.png" width="120" height="150" /></a></li>
              <li><a href="#" data-placement="bottom" title="Twitter"><img src="images/logo/ayokebank.png" width="150" height="80" /></a></li>
                
                
              </ul>
            </div>
        </div>
      </div>
    </section>
