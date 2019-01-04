<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- CSS pribadi -->
    <link rel="stylesheet" href="/ds_resort/assets/css/style.css">

    <script src="/ds_resort/assets/js/script.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlXTI26UPn_mzsPbf0xs3Rli9XGNmo5M&callback=initMap"
    async defer></script>

</head>
<body>

    <section class="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php base_url(); ?>dashboard"><img src="/ds_resort/assets/img/DSResort-ico.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>		
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="<?php base_url(); ?>dashboard">Home <span class="sr-only">(current)</span></a>
                        <a class="btn btn-primary" href="<?php base_url(); ?>pendaftar">Lihat Pendaftar</a>
                    </div>	
                </div>		
            </div>
        </nav>

    </section>

      
    <section class="content">
      
      <div class="container">
        <div class="col-md-12">
        <h2>Daftar Karyawan Yang Telah Bergabung Dengan Kami</h2>
        <br>
          <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi</th>
      <th scope="col">Jurusan/Posisi</th>
    </tr>
  </thead>
  <?php foreach ($pendaftar ->result() as $p){ ?>
                                <tr>
                                    <td><?php echo $p->id_pendaftaran; ?></td> 
                                    <td><?php echo $p->nama; ?></td>
                                    <td><?php echo $p->instansi; ?></td>
                                    <td><?php echo $p->jurusan; ?></td>

							<?php }?>
</table>

            
            
        </div>   
      </div>

    </section>
            
        

    <section class="footer">

<div class="container text-center">
    <div class="row">
        <div class="col-sm-12">
            <p>&copy; copyright 2019 | build by. <a href="http://instagram.com/dimasnugroho_putro" target="_blank">Dimas Nugroho Putro</a>.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <a href="https://twitter.com/DimasNugroho673" class="btn btn-primary" target="_blank"><i class="glyphicon glyphicon-phone" ></i> Follow on Twitter</a>
        </div>
    </div>
</div>

</section>


</body>
</html>