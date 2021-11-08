<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KASIR">
    <meta name="author" content="open">

    <title>KASIR</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() . 'assets/css/4-col-portfolio.css' ?>" rel="stylesheet">

    <style type="text/css">
        .bg {
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -1;
            float: left;
            left: 0;
            margin-top: -20px;
        }
    </style>
</head>

<body>
    <img src="<?php echo base_url() . 'assets/img/bg-jadi.jpg' ?>" alt="gambar" class="bg" />
    <!-- Navigation -->
    <?php
    $this->load->view('admin/menu');
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <marquee scrolldelay="70" scrollamount="6" bgcolor="#17abeb">
                <font color="black">
                    <h5 style="color:white;"> NIAGA JAYA FURNITURE , ALAMAT: Jl. Raya Gn. Sindur Kp. Cogreg Rt. 01 Rw. 06 Ds. Cogreg Kec. Parung Kab. Bogor ( Depan Perumahan Lembah Bukit Calincing ) , NO TELP: 0251 856 5131, HP : 0821 7837 2871</h5>
                </font>
            </marquee>
            <div class="col-lg-12">
                <center>
                    <h2 class="page-header" style="background-color:white;" style="color:white;">NIAGA JAYA FURNITURE / LOGO

                    </h2>
                </center>
            </div>
        </div>
        <!-- /.row -->
        <div class="mainbody-section text-center">
            <?php $h = $this->session->userdata('akses'); ?>
            <?php $u = $this->session->userdata('user'); ?>








            <!-- Projects Row -->
            <!-- ------------------------------------------------MENU ADMIN DERET ATAS--------------------------------------------------------------------- -->
            <div class="row">
                <?php if ($h == '1') { ?>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/penjualan' ?>" data-toggle="modal">

                                <img width="97px" height="97px" src="assets/img/i-penjualan.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Penjualan Eceran</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/penjualan_grosir' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-transaksi.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Penjualan Grosir</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/suplier' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-suplier.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Suplier</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/kategori' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-kategori.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Kategori</p>
                            </a>
                        </div>
                    </div>




                <?php } ?>
                <?php if ($h == '2') { ?>



                <?php } ?>
            </div>
            <!--------------------------------------- SELESAI MENU ADMIN DERET ATAS---------------------------------------------- -->
            <!-- /.row -->







            <!-- Projects Row -->






            <!-- --------------------------------------------MENU ADMIN DERET BAWAH----------------------------------------------------------- -->
            <div class="row">
                <?php if ($h == '1') { ?>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/barang' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-barang.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Barang</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/pengguna' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-user.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Pengguna</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/laporan' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-laporan.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Laporan</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/pembelian' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-pembelian.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Pembelian</p>
                            </a>
                        </div>
                    </div>





                    <!-- ----------------------------------------------SELESAI MENU DERET BAWAH--------------------------------------- -->












                    <!------------------------------------------------------ MENU KASIR---------------------------------------------------- -->

                <?php } ?>
                <?php if ($h == '2') { ?>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/penjualan' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-penjualan.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Penjualan Eceran</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/penjualan_grosir' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-jualgrosir.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Penjualan Grosir</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 portfolio-item">
                        <div class="menu-item blue" style="height:184px;">
                            <a href="<?php echo base_url() . 'admin/retur' ?>" data-toggle="modal">
                                <img width="97px" height="97px" src="assets/img/i-reture.png" />
                                <p style="text-align:center;font-size:30px;padding-left:1px;">Retur</p>
                            </a>
                        </div>
                    </div>


                <?php } ?>
            </div>


            <!------------------------------------------SELESAI MENU KASIR-------------------------------------------------------- -->

            <!-- /.container -->

            <!-- jQuery -->
            <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>

</body>

</html>