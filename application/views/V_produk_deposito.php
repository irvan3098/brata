<section id="inner-headline">
    <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Produk <b>Deposito</b></h2>
            </div>
          </div>
    </div>
</section>
<section id="content">
      <div class="container">
        <div class="row">
            <div class="span3">
                <h4>Tingkat Bunga Penjaminan</h4>
                <table class="table table-striped">
              <thead>
                <tr>
                  <th>Janka Waktu</th>
                  <th>Persentase</th>
                </tr>
              </thead>
              <tbody>
               </tbody>
            </table>
          
            </div>
          <?php foreach($pro_dep as $data) {?>
          <div class="span9">
            <div class="row">
              <div class="span9">
                <h4><strong><?php echo $data["nama_pro_deposito"];?></strong></h4>
                <p>
                <?php echo $data["penjelasan_depo"];?>
                </p>
                </div>
              </div>
          </div>
          <?php }?>
 </section>