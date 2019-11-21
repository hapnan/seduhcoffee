<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('external/css/shop.css') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light scrolling-navbar fixed-top">
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
        <form class="form-inline my-2 my-lg-0">
				<a href="<?= base_url('register'); ?>"><button class="btn btn-outline-danger mr-1" type="submit" >Register</button></a>
        <a href="<?= base_url('login'); ?>"><button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Login</button></a>
        </form>
    </nav>
    <!-- navbar end-->

    <!-- poster -->
    <div class="poster">        
    </div>
    <!-- poster end-->

    <!-- search bar -->
    <section class="search mt-2 container">
      <div class="row">
        <div class="col-md-12">
            <form class="d-inline">
              <div class="row">
                <div class="col-md-10">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="col">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
              </div>
              </form>
        </div>
      </div> 
    </section>
    <!-- second nav -->
    <section class="taglink mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
    </section>
    <!-- content -->
    <section class="content container-fluid">
        <div class="row">
          <!-- filter card -->
          <div class="col-md-2 ">
              <div class="card" style="width: 15rem;">
                  <div class="card-header">
                      Filter
                    </div>
                    <div class="accordion" id="accordionExample">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item headingOne">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Kategori
                          </button>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body text-dark">
                                <a href="" class="linkmerek"><p>1</p></a>
                                <a href="" class="linkmerek"><p>1</p></a>
                                <a href="" class="linkmerek"><p>1</p></a>
                                <a href="" class="linkmerek"><p>1</p></a>
                              </div>
                              
                          </div>
                        </li>
                        <li class="list-group-item headingTwo">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Merk
                          </button>
                          <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body text-dark">
                                  <a href="" class="linkmerek"><p>1</p></a>
                                  <a href="" class="linkmerek"><p>1</p></a>
                                  <a href="" class="linkmerek"><p>1</p></a>
                                  <a href="" class="linkmerek"><p>1</p></a>
                              </div>
                          </div>
                        </li> 
                      </ul>
                    </div>
                </div>
          </div>
          <!-- filter card end-->

          <!-- card item list -->
          <div class="col-md-10">
              <div class="row mb-3">
                <div class="col-md-3">
                    <div class="card mx-2" style="width: 18rem;">
                        <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                          <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                            add_shopping_cart
                            </i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mx-2" style="width: 18rem;">
                        <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                          <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                            add_shopping_cart
                            </i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mx-2" style="width: 18rem;">
                        <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                          <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                            add_shopping_cart
                            </i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mx-2" style="width: 18rem;">
                        <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                          <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          
                        </div>
                        <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                            add_shopping_cart
                            </i>
                        </a>
                    </div>
                </div>
              </div>

              <div class="row mb-3">
                  <div class="col-md-3">
                      <div class="card mx-2" style="width: 18rem;">
                          <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                            <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                          <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                              add_shopping_cart
                              </i>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card mx-2" style="width: 18rem;">
                          <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                            <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                          <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                              add_shopping_cart
                              </i>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card mx-2" style="width: 18rem;">
                          <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                            <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                          <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                              add_shopping_cart
                              </i>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="card mx-2" style="width: 18rem;">
                          <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                            <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                          </div>
                          <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                              add_shopping_cart
                              </i>
                          </a>
                      </div>
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                              <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                            <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                                add_shopping_cart
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                              <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                            <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                                add_shopping_cart
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                              <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                            <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                                add_shopping_cart
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-2" style="width: 18rem;">
                            <img src="<?= base_url('external/image/images.jfif');?>" class="card-img-top" alt="...">
                            <div class="card-body">
                              <a href="http://"><h5 class="card-title">Trojan Natural Process</h5></a>
                              <h6 class="card-subtitle mb-2">Rp. 100.000</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              
                            </div>
                            <a href="#" class="mx-5 pl-4"><i class="material-icons mx-5">
                                add_shopping_cart
                                </i>
                            </a>
                        </div>
                    </div>
                  </div>
          </div>
        </div>
        <!-- card item list end-->

        <!-- pagination -->
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center ">
              <nav aria-label="Page navigation example ">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
          </div>
        </div>
        <!-- pagination end-->
    </section>
    <!-- content end -->

    <!-- subcription -->
    <section class="subcription">
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="shop.js"></script>
  </body>
</html>
