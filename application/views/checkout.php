<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('external/css/checkout.css');?> ">
    
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
				<li class="breadcrumb-item active" aria-current="page">Checkout</li>
			</ol>
		</nav>
  	
		<div class="container mt-5 pb-5">
			<div class="row">
				<div class="col-md-12">
					<h3  class="text-center">List Pembelian</h3>
					<table class="table">
						<tbody>
							<tr>
								<td colspan="2"><img src="<?= base_url('external/image/images.jfif');?>" class="mr-1" width="120px" height="120px"><b> Trojan Natural Process </b>
										<input class="form-control change" type="text" value="1" readonly>
										<div class="edit" >
											<a  href="#">Ubah</a>
											<a href="">Hapus</a>
										</div>
								</td>
								<td class="align-middle text-center">Rp. 100000</td>
							</tr>
							<tr style="border-top: 1px solid black;">
								<td colspan="2">Sub Total</td>
								<td class="align-middle text-center">Rp. 100000</td>
							</tr>
							
							<tr>
								<td colspan="2">Pilih Kurir 
									<select class="form-control w-50" id="exampleFormControlSelect1">
										<option>1</option>
										<option>2</option>
									</select>
								</td>
								<td class="align-middle text-center">Rp. 100000</td>
							</tr>
							<tr>
								<td colspan="2">Total Pembayaran</td>
								<td class="align-middle text-center">Rp. 100000</td>
							</tr>
						</tbody>
					</table>
					<a class="d-flex justify-content-end" style="margin-right: 150px;" href=""><button type="button" class="btn btn-primary">lanjut ke Pembayaran</button></a>
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
