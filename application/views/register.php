<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('external/css/register.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="imagebg">
    <nav class="navbar navbar-expand-lg  navbar-light scrolling-navbar fixed-top">
      <a class="navbar-brand" href="<?= base_url("welcome")?>">Seduh Coffe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('welcome')?>">Home <span class="sr-only">(current)</span></a>
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
	  <i class="material-icons mr-2">
          shopping_cart
        </i>
	  	<a href="<?= base_url('register') ?>"><button class="btn btn-danger mr-1" type="submit" >Register</button></a>
        <a href="<?= base_url('login') ?>"><button class="btn btn-success my-2 my-sm-0" type="submit" >Login</button></a>
      </div>
  </nav>
    <section class="login mt-5 container">

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 imgicon">
                        <img class="img-fluid" src="<?= base_url('external/image/Artboard.png');?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="row ">
                            <div class="col-md-8 box">
                                <form class="form"  action="">
                                    <h1 class="text-center">Register</h1>
                                    
                                        <div class="form-group">
                                            <input type="text" name="name" id="nama" required>
                                            <label for="name" class="label-name"><span class="content-name">Nama</span></label>
                                        </div>
                                       
                                    
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" required>
                                            <label for="email" class="label-email"><span class="content-email">Email</span></label>
                                        </div>
                                    
                                    
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" required>
                                            <label for="password" class="label-password"><span class="content-password">Password</span></label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="passwordv" name="passwordv" id="passwordv" required>
                                            <label for="passwordv" class="label-passwordv"><span class="content-passwordv">Password</span></label>
                                        </div>  
                                    
                                    <input class="btn btn-secondary mx-auto d-block" type="button" value="Register">
                                    <h5 class="text-center">OR</h5>
                                    <hr>
                                    <a href="http://"><img class="login-google mb-3  mx-auto d-block" src="<?= base_url('external/image/google-sign-in.png');?>" alt="login google"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
