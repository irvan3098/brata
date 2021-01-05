<div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li>
                        	<a href="<?=site_url('admin/Berita')?>" aria-expanded="false">
                            <i class="fa ti-user"></i><span class="hide-menu">Berita</span>
                            </a>
                     	</li>
                         <li>
                        	<a href="<?=site_url('admin/galeri')?>" aria-expanded="false">
                            <i class="fa ti-user"></i><span class="hide-menu">Galeri</span>
                            </a>
                     	</li>
                         <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Produk</span></a>
                            <?php if($id == 1){?>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="tabungan">Tabungan</a></li>
                                <li><a href="deposito">Deposito</a></li>
                                <li><a href="kredit">Kredit</a></li>
                            </ul>
                            <?phP }else {
                            ?>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="produk/tabungan">Tabungan</a></li>
                                <li><a href="produk/deposito">Deposito</a></li>
                                <li><a href="produk/kredit">Kredit</a></li>
                            </ul> 
                            <?php    
                            }?>
                        </li>
                        <li>
                        	<a href="<?=site_url('admin/lpk')?>" aria-expanded="false">
                            <i class="fa ti-user"></i><span class="hide-menu">LPK</span>
                            </a>
                     	</li>
                        <li>
                        	<a href="<?=site_url('admin/login/logout')?>" aria-expanded="false">
                            <i class="fa ti-user"></i><span class="hide-menu">Logout</span>
                            </a>
                     	</li>
                        <?php 
                            echo var_dump($id);
                        ?>  
                        
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>