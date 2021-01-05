<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>JekobStudio</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=site_url('Index')?>">
                        <!-- Logo icon -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="<?php echo base_url();?>assets/admin/images/logo_brata.png" width="150" height="75" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                       
                    </ul>
                    <!-- User profile and search -->
                   
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <?php echo $sidebar;?>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <?php echo $konten;?>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url();?>assets/admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>
   
    
    
     
	<!--validasi-->
    <script src="<?php echo base_url();?>assets/admin/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/form-validation/jquery.validate-init.js"></script>
    
    <!--table-->
    <script src="<?php echo base_url();?>assets/admin/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/datatables/datatables-init.js"></script>
   
   <!--grapik-->
    <script src="<?php echo base_url();?>assets/admin/js/lib/morris-chart/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/morris-chart/morris.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/morris-chart/morris-init.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/lib/chart-js/Chart.bundle.js"></script>
    <script language="javascript">
	
	function formatNumber(num) {
  		return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
	}
	
	( function ( $ ) {
	"use strict";

	//bar chart
	var ctx = document.getElementById( "barChart" );
	//    ctx.height = 200;
	var myChart = new Chart( ctx, {
		type: 'bar',
		data: {
			labels: [ 
						<?php 
							$i = 1;
							foreach($bulan as $th){?>
						".<?php echo $th["nama_bulan"]." ".number_format($car[$i]["nilai"],2)?>.",
						<?php $i++; }?>
					],
			datasets:	[
							
							{
									label: "Kas",
									data: 	[ 
												 <?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[101];?>,
													<?php	
													}
													?>
											],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(32,100,255,0.5)"
							},
							{
									label: "Giro",
									data: [
											<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[10301];?>,
													<?php	
													}
													?>
									],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(32,100,255,0.5)"
							},
							{
									label: "Tabungan",
									data: [ 
												<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[10302];?>,
													<?php	
													}
													?>
									],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(32,100,255,0.5)"
							},
							{
									label: "Kewajiban Segera",
									data: [ 
												<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[201];?>,
													<?php	
													}
													?>
									 ],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(230,18,123,0.5)"
							},
							{
									label: "Tabungan",
									data: [ 
												<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[202];?>,
													<?php	
													}
													?>
									],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(230,18,123,0.5)"
							},
							{
									label: "Deposito Berjangka",
									data: [ 
												<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[203];?>,
													<?php	
													}
													?>
									
									 ],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(230,18,123,0.5)"
							},
							{
									label: "Antar Bank Pasiva",
									data: [
												<?php 
												 	foreach($rincian_car as $r_car){
												 ?>	
														<?php echo $r_car[205];?>,
													<?php	
													}
													?>
									],
									borderColor: "rgba(0,0,0,0.09)",
									borderWidth: "0",
									backgroundColor: "rgba(230,18,123,0.5)"
							}
							
	                   	]
		},
		options: {
			scales: {
				yAxes: [ {
					ticks: {
						beginAtZero: true
					}
                                } ]
			}
		}
	} );

} )( jQuery );

	</script>
    <!--gambar verview-->
    
</body>

</html>