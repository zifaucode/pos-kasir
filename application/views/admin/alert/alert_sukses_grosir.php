<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KASIR">
    <meta name="author" content="open">

    <title>Transaksi Penjualan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
</head>

<body>

    <!-- Navigation -->
   <center><a href="/pos/welcome" class="BUTTON2">KEMBALI</a></center>
<style>
.BUTTON2 {
    box-shadow: 0px 1px 0px 0px #3dc21b;
    background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
    background-color:#44c767;
    border-radius:6px;
    border:1px solid #18ab29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:28px;
    font-weight:bold;
    padding:8px 60px;
    text-decoration:none;
    text-shadow:0px -1px 0px #2f6627;
}
.BUTTON2:hover {
    background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
    background-color:#5cbf2a;
}
.BUTTON2:active {
    position:relative;
    top:1px;
}
</style>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    <center>  <strong>TRANSAKSI BERHASIL<br> Silahkan Cetak Faktur Penjualan!</strong><br><br>
                    <a class="btn btn-default" href="<?php echo base_url().'admin/penjualan_grosir'?>"><span class="fa fa-backward">&nbsp; &nbsp;</span>Kembali</a>
                      &nbsp; &nbsp; &nbsp;
                    <a class="btn btn-info" href="<?php echo base_url().'admin/penjualan_grosir/cetak_faktur_grosir'?>" target="_blank"><span class="fa fa-print">&nbsp; &nbsp;</span>Cetak</a></center>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
       
        

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center;">Copyright &copy; <?php echo date("Y");?> NAMA TOKO</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    
    
    
</body>

</html>
