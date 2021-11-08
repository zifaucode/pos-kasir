 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'welcome'?>">NJ FURNITURE</a><br>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
                     <!--dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><img width="37px" height="37px" src="assets/img/i-penjualan.png"/> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'admin/penjualan'?>"><img width="20px" height="20px" src="assets/img/i-penjualan.png"/> Penjualan (Eceran)</a></li> 
                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>"><img width="20px" height="20px" src="assets/img/i-jualgrosir.png"/> Penjualan (Grosir)</a></li> 
                        </ul>
                    </li>
                    <!--ending dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/retur'?>"><img width="37px" height="37px" src="assets/img/i-reture.png"/> Retur</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/grafik'?>"><img width="37px" height="37px" src="assets/img/i-grafik.png"/> Grafik</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'admin/laporan'?>"><img width="37px" height="37px" src="assets/img/i-laporan.png"/> Laporan</a>
                    </li>
                    <?php }?>
                    <?php if($h=='2'){ ?> 
                      <!--dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><img width="37px" height="37px" src="assets/img/i-penjualan.png"/> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'admin/penjualan'?>"><img width="20px" height="20px" src="assets/img/i-penjualan.png"/></span> Penjualan (Eceran)</a></li> 
                            <li><a href="<?php echo base_url().'admin/penjualan_grosir'?>"><img width="20px" height="20px" src="assets/img/i-jualgrosir.png"/> Penjualan (Grosir)</a></li> 
                        </ul>
                    </li>
                    <!--ending dropdown-->
                    <li>
                        <a href="<?php echo base_url().'admin/retur'?>"><img width="37px" height="37px" src="assets/img/i-reture.png"/>Retur</a>
                    </li>
                    <?php }?>
                     <li>
                        <a href="<?php echo base_url().'administrator/logout'?>"><img width="37px" height="37px" src="assets/img/i-keluar.png"/></span> KELUAR</a>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>