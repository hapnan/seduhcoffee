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
				<li class="breadcrumb-item active" aria-current="page">Library</li>
			</ol>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="card text-center">
						<img src="<?= base_url('external/image/images.jfif')?>" class="card-img-top " alt="...">
						<div class="card-body">
							<h5 class="card-title">Toraja Natural Process</h5>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h2>Toraja Natural Process</h2>
					<hr>
					<table class="w-50">
								<tbody>
									<tr class="align-middle">
										<td>Pack</td>
										<td><div class="form-group">
													<select class="form-control" id="pack">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
										</td>
									</tr>
								</tbody>
					</table>
					<h5 class="ml-2">Rp.100.000</h4>
					<hr>
					<div class="input-group w-75">
            <span class="input-group-btn">
                <button type="button" class="quantity-left-minus btn btn-danger btn-number mr-1"  data-type="minus" data-field="">
								<i class="material-icons">remove</i>
                </button>
            </span>
          	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
            <span class="input-group-btn">
              <button type="button" class="quantity-right-plus btn btn-success btn-number ml-1" data-type="plus" data-field="">
              	<i class="material-icons">add</i></span>
              </button>
						</span>
						<span class="input-group-btn">
              <button type="button" class="btn-add-to-cart btn btn-success btn-number ml-5" data-type="plus" data-field="">
							<i class="material-icons">add_shopping_cart</i>Add to Cart</span>
              </button>
						</span>
          </div>
					<hr>
					<div class="row mt-5 mt-md-2">
						<div class="col-md-12">
							<table>
								<tbody>
									<tr>
										<td>Origin</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Region</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Altitude</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Varietas</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Proceching Method</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Rosting Profile</td>
										<td>Atu Litang</td>
									</tr>
									<tr>
										<td>Cupping Note</td>
										<td>Atu Litang</td>
									</tr>
							
								</tbody>
							</table>
						
							<hr>

						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
		<hr>
			<div class="row">
				<div class="col-md-12">
						<h3 class="text-center">Description</h3>
						<p class="text-justify mt-3" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, labore? Magnam cumque quo, est odio nostrum, fuga corporis praesentium, maxime aliquid molestiae modi magni perspiciatis adipisci tenetur animi. Quos, reprehenderit.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <hr>
					 <h3 class="text-center"> RELATED PRODUCTS</h3>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-4">
					<div class="card mx-2" style="width: 18rem;">
							<img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
							<div class="card-body">
									<a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
									<h6 class="card-subtitle mb-2">Rp. 100.000</h6>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>            
									</div>
										<a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">add_shopping_cart</i></a>
							</div>
				</div>
				<div class="col-md-4">
					<div class="card mx-2" style="width: 18rem;">
							<img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
							<div class="card-body">
									<a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
									<h6 class="card-subtitle mb-2">Rp. 100.000</h6>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>            
									</div>
										<a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">add_shopping_cart</i></a>
							</div>
				</div>
				<div class="col-md-4">
					<div class="card mx-2" style="width: 18rem;">
							<img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
							<div class="card-body">
									<a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
									<h6 class="card-subtitle mb-2">Rp. 100.000</h6>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>            
									</div>
										<a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">add_shopping_cart</i></a>
							</div>
				</div>
			</div>
		</div>
	</div>
	<section class="subcription mt-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="bgblur"></div>
          <div class="bg-text">
            <h3>Dapatkan koleksi terbaru seduh coffe</h3>
            <h3>Kami akan menghubungi anda</h3>
            <form class="d-inline-flex justify-content-center">
                <div class="row">
                  <div class="col-md-10">
                      <input class="form-control " type="email" placeholder="Email" aria-label="Email">
                  </div>
                  <div class="col-md-1">
                      <button class="btn btn-outline-success " type="submit">Submit</button>
                  </div>
                </div>
                </form>
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
    <script type="text/javascript">
				$(document).ready(function(){
					var quantitiy=0;
						$('.quantity-right-plus').click(function(e){
									
									// Stop acting like a button
									e.preventDefault();
									// Get the field name
									var quantity = parseInt($('#quantity').val());
									
									// If is not undefined
											
											$('#quantity').val(quantity + 1);

										
											// Increment
									
							});

							$('.quantity-left-minus').click(function(e){
									// Stop acting like a button
									e.preventDefault();
									// Get the field name
									var quantity = parseInt($('#quantity').val());
									
									// If is not undefined
								
											// Increment
											if(quantity>0){
											$('#quantity').val(quantity - 1);
											}
							});
							
					});
		
		</script>
  </body>    
