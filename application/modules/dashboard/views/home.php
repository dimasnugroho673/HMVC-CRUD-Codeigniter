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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUlXTI26UPn_mzsPbf0xs3Rli9XGNmo5M&callback=initMap"
    async defer></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- js pribadi -->
    <script src="/ds_resort/assets/js/script.js"></script>

</head>
<body>

    <section class="header">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php base_url(); ?>"><img src="/ds_resort/assets/img/DSResort-ico.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>		
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="<?php base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                        <a class="btn btn-primary" href="<?php base_url(); ?>pendaftar">Lihat Pendaftar</a>
                    </div>	
                </div>		
            </div>
        </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/ds_resort/assets/img/DSResort.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/ds_resort/assets/img/DSResort2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/ds_resort/assets/img/DSResort3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/ds_resort/assets/img/DSResort4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/ds_resort/assets/img/DSResort5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </section>

    <section class="content">
    <div class="container form">
        <?php echo $this->session->flashdata('report'); ?>
        <div class="row">
			<div class="col-sm-12">
                <h2 class="text-center"> <b>Bergabung Bersama Kami di DS Resort Bintan</b> </h2>
                <hr>
			</div>
		</div>
        
        <br>
                        
        <div class="row maps">
            <div class="col-sm-12">
                <div id="map" style="width:80%; height:380px; margin: auto;;"></div>
            </div>
        </div>

        <br>
        <br>

        <h2 align="center">Daftar Sekarang Untuk Bekerja di DS Resort Bintan</h2>
        <hr>
        <br>
        <br>

        <?php echo form_open('dashboard/post_insert'); ?>    
            <form action="#" method="post" >

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama . . ." required=""> 
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">No Identitas</label>
                        <input type="text" class="form-control" name="identitas" placeholder="Masukan nik/sim/ktm . . ."> 
                    </div>
                </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pekerjaan :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status"  value="Pelajar/Mahasiswa" checked>
                            <label class="form-check-label" for="exampleRadios1">Mahasiswa</label>        
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status"  value="Bekerja" checked>
                            <label class="form-check-label" for="exampleRadios1">Karyawan</label>   
                        </div>
                    </div>

                    <div class="form-group ">
                        <label >Jurusan/Posisi</label>
                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan/Posisi . . ." required=""> 
                    </div>
                    <div class="form-group ">
                        <label >Universitas/Instansi</label>
                        <input type="text" name="instansi" class="form-control" placeholder="Universitas/Perusahaan . . . " required=""> 
                    </div>
                    <div class="form-group ">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan email . . ." required=""> 
                    </div>
                    <div class="form-group ">
                        <label >No Telepon</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="+628 . . . " required=""> 
                    </div>
                        <button class="btn btn-primary col-md-12" type="submit">Daftar Sekarang</button>
                    </form>
                    <?php echo form_close();?>
                </div>
            </div>
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