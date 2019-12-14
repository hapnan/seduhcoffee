<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('external/css/info.css');?> ">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
  
    <title>Seduh Coffe</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
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
				<a href="<?= base_url('login') ?>"><i class="material-icons pt-2">account_circle</i></a>
				<a class="mr-2" href="http://"> <i class="material-icons pt-2 ">
          shopping_cart
				</i><i class="pb-5">Cart</i> </a>
				
			</div>
  	</nav>
  	<div class="container-fluid">
		<nav aria-label="breadcrumb" class="mt-5 pt-3">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Shoping cart</li>
			</ol>
		</nav>
		<div class="container">
			<div class="col-md-12">
				<h3 class="text-center">Keranjang Belanjan</h3>
				<hr>

				<table class="table">
				<thead>
					<tr>
					<th scope="col"></th>
					<th class="text-center" scope="col">Harga</th>
					<th class="text-center" scope="col">Jumlah</th>
					<th class="text-center" scope="col">Sub Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<th scope="row"><img src="<?= base_url('external/image/images.jfif');?>" class="mr-1" width="120px" height="120px">Trojan Natural Process</th>
					<td class="text-center">100.000</td>
					<td class="text-center edit">3</td>
					<td class="text-center">300.000</td>
					</tr>
					<tr>
					<th scope="row"><img src="<?= base_url('external/image/images.jfif');?>" class="mr-1" width="120px" height="120px">Trojan Natural Process</th>
					<td class="text-center">120.000</td>
					<td class="text-center edit" >3</td>
					<td class="text-center">380.000</td>
					</tr>
					<tr>
					<th colspan="3" class="text-right">Total</th>
					<td class="text-center">Rp 680.000</td>
					</tr>
				</tbody>
				</table>
				<div class="btn-group-1 d-flex justify-content-end mr-5">
					<span class="btn-checkout mr-2"><button type="button" class="btn btn-warning">Edit</button></span>
					<a href="#" class="btn-checkout"><button type="button" class="btn btn-success">Checkout</button></a>
				</div>
			</div>

		</div>
  	</div>	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?= base_url('external/js/main.js');?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <script type="text/javascript">
				$(document).ready(function(){
					
				});
		
		</script>
  </body>    
