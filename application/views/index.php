<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('external/css/main.css');?> ">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet">
		
  
    <title>Seduh Coffe</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
      <a class="navbar-brand" href="#">Seduh Coffe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('shop') ?>">Coffe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" >blog</a>
          </li>
        </ul>
      </div>
      <div class="form-inline my-2 my-lg-0">
				<a href="http://"> <i class="material-icons pt-2 mr-1">
          shopping_cart
				</i></a>
				<a href="<?= base_url('register') ?>"><button class="btn btn-danger mr-1" type="submit" >Register</button></a>
        <a href="<?= base_url('login') ?>"><button class="btn btn-success my-2 my-sm-0" type="submit" >Login</button></a>
			</div>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide parallax" data-ride="carousel">
      
            
        <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url('external/image/corosel.jpg');?>" data-color="lightblue" alt="First Image">
          <div class="carousel-caption">
            <div class="animated fadeInDown ">
              <h3>Seduh Coffe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni tempore porro incidunt consectetur vel culpa aliquid asperiores rerum nulla sapiente facilis impedit iste recusandae enim est laudantium praesentium, illo ullam.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url('external/image/corosel.jpg');?>" data-color="lightblue" alt="First Image">
          <div class="carousel-caption">
              <div class="animated fadeInDown ">
                <h3>Seduh Coffe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni tempore porro incidunt consectetur vel culpa aliquid asperiores rerum nulla sapiente facilis impedit iste recusandae enim est laudantium praesentium, illo ullam.</p>
              </div>
          </div>
          </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('external/image/corosel.jpg');?>" data-color="lightblue" alt="First Image">
              <div class="carousel-caption">
                <div class="animated fadeInDown ">
                    <h3>Seduh Coffe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni tempore porro incidunt consectetur vel culpa aliquid asperiores rerum nulla sapiente facilis impedit iste recusandae enim est laudantium praesentium, illo ullam.</p>
                </div>
              </div>
            </div>
      </div>
            
              <!-- Controls -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
            
    </div>
    <section class= "explained container" >
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 judul1 bg-danger text-light text-center">
              <h2>SEDUH COFFE</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col1">
              <h4 class="produkA bg-danger text-light">Green Been Series</h4><br>
              <p class="text1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis corrupti accusantium et amet sapiente tenetur corporis soluta totam autem, vel dolores nemo eaque veniam illum quae numquam fugiat laboriosam.</p>
            </div>
            <div class="col-md-6">
              <img class="img-fluid" src="<?= base_url('external/image/green-coffee-bean.jpg');?>" alt="Green">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <img class="img-fluid" src="<?= base_url('external/image/Kopi_Luwak_Coffee1.jpg');?>" alt="Green">
            </div>
            <div class="col-md-6 col2">
              <h4 class="produkB bg-danger text-light">Green Been Series</h4><br>
              <p class="text2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quis corrupti accusantium et amet sapiente tenetur corporis soluta totam autem, vel dolores nemo eaque veniam illum quae numquam fugiat laboriosam.</p>
            </div>
          </div>
          <div class="col-md-6 judul2 bg-danger text-light text-center">
              <h2 class="">SEDUH COFFE</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="content2">
      <div class="row">
        <div class="col-md-12">
            <img src="<?= base_url('external/image/footer.jpg');?>" alt="" class="img-fluid w-100">
        </div>
      </div>
    </section>
    <section class="footer">
      <div class="container">
        <div class="row ">
          <div class="alamat col-md-6 text-light">
            <div class="alamat-item">
              <h3>Seduh Coffe Office</h3>
              <span>Jl Gedeh 7 A, Semarang</span>
              <br>
              <span>59254</span>
              <br>
              <span>087976372652</span>
              <br>
              <img src="<?= base_url('external/image/instagram.png');?>" width="30dp" height="30dp"  >
              <span>@Seduhcoffe.id</span>
              <br>
              <img src="<?= base_url('external/image/facebook.png');?>" width="30dp" height="30dp">
              <span>Seduh Coffe</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.461412197703!2d110.41480890000001!3d-6.9820796000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b51dd960fa1%3A0xa1d5c6208e612287!2zNsKwNTgnNTUuNyJTIDExMMKwMjQnNTMuMiJF!5e0!3m2!1sid!2sid!4v1573581624406!5m2!1sid!2sid" allowfullscreen></iframe>
                
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?= base_url('external/js/main.js');?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    
  </body>    
