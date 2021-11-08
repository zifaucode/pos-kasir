<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Data Barcode Barang</title>
    <meta charset="utf-8">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/style.css' ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onload="window.print()">
    <div id="laporan">
        <div class="container">
            <div class="row">
                <h3 class="text-center"> Data Barcode </h3>
            </div>
            <div class="row">
                <?php foreach ($data->result_array() as $d) : ?>

                    <img class="img-thumbnail float-left" src="<?php echo base_url("assets/barcode/" . $d['barcode'] . ""); ?>">


                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>