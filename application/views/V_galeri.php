<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Portfolio</h2>
                </div>
            </div>
        </div>
    </div>
</section>
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
                <li class="item-thumbs span4 design" data-id="id-0" data-type="<?php echo $data_berita["nama_kategori"]?>">
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
