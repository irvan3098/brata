

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="inner-heading">
                    <h2>Laporan keuangan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
            <?php
                foreach($data_lpk as $data)
                {
            ?>
                    <img src="<?php echo base_url();?>images/lpk/<?php echo $data["file"];?>" />
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</section>
