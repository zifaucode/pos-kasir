<!DOCTYPE html>
<html>
  <head>
    <title>MASUK KASIR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="KASIR">
    <meta name="author" content="open">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url().'assets/css/stylesl.css'?>" rel="stylesheet">

   
  </head>
 

  <body style="background-color: #cfb467" class="login-bg">


  <br>
  <br>
  <br>
  <br>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div  style="background-color: #9c8236" class="box">
			            <div class="content-wrap">
			                <img width="150px" src="<?php echo base_url().'assets/img/i-pembelian.png'?>"/><h3>NIAGA JAYA <br>FURNITURE</h3>
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post">
	                        	<input class="form-control" type="text" name="username" placeholder="Username" required>
				                <input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
				                <div class="action">
				                    <button type="submit" class="btn btn-lg " style="width:310px;margin-top:0px; bg-color:#ff9000;">MASUK</button>
				                </div>
	                        </form>
			                                
			            </div>
			        </div>

			        <div class="already">
			           
			            
			        </div>
			    </div>
			</div>
		</div>
	</div>

<center><img src="<?php echo base_url().'assets/img/bg-depan.jpg'?>" alt="gambar" class="bg" width="900px" heigt="920px" /></center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>