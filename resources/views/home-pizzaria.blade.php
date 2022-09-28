@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home Pizzaria</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">

  <style>

    html,
    body,
    header,
    .jarallax {
      height: 700px;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .jarallax {
        height: 100vh;
      }
    }

    @media (min-width: 560px) and (max-width: 650px) {
      header .jarallax h1 {
        margin-bottom: .5rem !important;
      }
      header .jarallax h5 {
        margin-bottom: .5rem !important;
      }
    }

    @media (min-width: 660px) and (max-width: 700px) {
      header .jarallax h1 {
        margin-bottom: 1.5rem !important;
      }
      header .jarallax h5 {
        margin-bottom: 1.5rem !important;
      }
    }

    .top-nav-collapse {
      background-color: #7283A7 !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: transparent !important;
    }

    @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
        background: #7283A7 !important;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
            background: #7283A7!important;
        }
    }

    footer.page-footer {
      background-color: #383838;
    }

    @media (max-width: 450px) {
      .display-3 {
        font-size: 3rem;
      }
    }

  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong color="black">PIZZARIA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nós</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://wallpaperboat.com/wp-content/uploads/2020/08/13/52628/pizza-05.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-white-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">PIZZARIA
                  <a class="red-text font-weight-bold">FORNO A LENHA</a>
                </h1>
                <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Delivery & Preços especiais</h5>
                <a class="btn btn-outline-danger btn-lg wow fadeInDown" data-wow-delay="0.3s">Sobre</a>
                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s">Cardápio</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->


  <!--Main Layout-->
  <main>

    <div class="container">

      <!--Section: Products v.3-->
      <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h1 class="font-weight-bold text-center h1 my-5">Mais Vendidas</h1>
        <!--Section description-->

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-ecommerce">

              <!--Card image-->
              <div class="view overlay z-depth-1">
                <img src="https://cache.dominos.com/olo/6_94_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZMUS.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                  <h5>Pizzas</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href ="red-text" class="red-text">Mussarela</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Pizza de mussarela no forno a lenha
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">40R$
                  </span>
                    </a>
                  </span>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-ecommerce">

              <!--Card image-->
              <div class="view overlay z-depth-1">
                <img src="https://cache.dominos.com/olo/6_94_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZCLB.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                  <h5>Pizzas</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Calabresa</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Pizza de calabresa com mussarela
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">50R$
                  </span>
                    </a>
                  </span>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-ecommerce">

              <!--Card image-->
              <div class="view overlay z-depth-1">
                <img src="https://cache.dominos.com/olo/6_94_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZFQ.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                  <h5>Pizzas</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Quatro Queijos</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Queijo, requeijão, gorgonzola, oregano e parmesão ralado
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">69R$
                  </span>
                    </a>
                  </span>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->

          <!--Fourth column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-ecommerce">

              <!--Card image-->
              <div class="view overlay z-depth-1">
                <img src="https://cache.dominos.com/olo/6_94_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZFR.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <a href="" class="text-muted">
                  <h5>Pizzas</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Frango c/ requeijão</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Frango desfiado, cebola, oregano e requeijão
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">65R$
                  </span>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Fourth column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <hr class="mb-5 mt-4">

      <!--Section: Products v.5-->
      <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

        <!--Section heading-->
        <h1 class="font-weight-bold text-center h1 my-5">Last products</h1>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Fugit, error amet numquam iure provident voluptate esse
          quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>
          <!--Controls-->

          <!--Indicators-->
          <ol class="carousel-indicators">
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
          </ol>
          <!--Indicators-->

          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

              <div class="col-md-4">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Leather boots</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                      saepe eveniet ut et voluptates.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">69$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Jeans</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Slim jeans</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam
                      incidunt eius est voluptatibus.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">99$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg" class="card-img-top" alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Shorts</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Denim shorts</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                      adipisci velit, sed quia
                      non.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">49$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

            </div>
            <!--First slide-->

            <!--Second slide-->
            <div class="carousel-item">

              <div class="col-md-4">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Summer hat</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam
                      incidunt eius est voluptatibus.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">39$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Black heels</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                      adipisci velit, sed quia
                      non.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">79$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Outerwear</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Black jacket</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                      saepe eveniet ut et voluptates.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">149$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

            </div>
            <!--Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

              <div class="col-md-4">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Leather bag</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                      adipisci velit, sed quia
                      non.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">29$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Accessories</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Leather belt</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                      saepe eveniet ut et voluptates.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">89$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                      <h5>Shoes</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Sneakers</a>
                      </strong>
                    </h4>

                    <!--Description-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam
                      incidunt eius est voluptatibus.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                      <span class="float-left">129$</span>
                      <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fas fa-heart"></i>
                        </a>
                      </span>
                    </div>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>

            </div>
            <!--Third slide-->

          </div>
          <!--Slides-->

        </div>
        <!--Carousel Wrapper-->

      </section>
      <!--Section: Products v.5-->

    </div>

    <!-- Streak Section -->
    <div class="streak streak-photo" style="background-image:url('https://mdbootstrap.com/img/Photos/Others/dress.jpg')">

      <div class="flex-center white-text pattern-1" style="background-attachment: f">
        <ul class="list-unstyled">
          <li>
            <h1 class=" white-text">
              <strong>500+</strong> happy customers</h1>
          </li>

        </ul>
      </div>

    </div>
    <!-- /.Streak Section -->

    <div class="container">

      <!--Projects section v.4-->
      <section class="text-center pb-5 wow fadeIn">

        <!--Section heading-->
        <h2 class="font-weight-bold text-center h1 my-5">Fashion news</h2>
        <!--Section description-->
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12 mb-4">
            <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/slide%20(31).jpg');">
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <a href="" class="purple-text">
                    <h5>
                      <i class="fas fa-plane pr-2"></i>Fashion week</h5>
                  </a>
                  <h3 class="mb-4 mt-4">
                    <strong>Project title</strong>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quod minima assumenda qui
                    mollitia
                    architecto soluta at ipsa itaque nam, aliquam minus odit expedita voluptatibus fugiat amet, nostrum
                    error
                    dolorum!.</p>
                  <a class="btn btn-secondary btn-sm">
                    <i class="fas fa-clone left"></i> View project</a>
                </div>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
            <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(60).jpg');">
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <a href="" class="pink-text">
                    <h5>
                      <i class="fas fa-camera pr-2"></i>Street style</h5>
                  </a>
                  <h3 class="mb-4 mt-4">
                    <strong>Project title</strong>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                    optio
                    vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.</p>
                  <a class="btn btn-pink btn-sm">
                    <i class="fas fa-clone left"></i> View project</a>
                </div>
              </div>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
            <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(58).jpg');">
              <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                  <a href="" class="green-text">
                    <h5>
                      <i class="fas fa-eye pr-2"></i>Summer trends</h5>
                  </a>
                  <h3 class="mb-4 mt-4">
                    <strong>Project title</strong>
                  </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                    optio
                    vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.</p>
                  <a class="btn btn-success btn-sm">
                    <i class="fas fa-clone left"></i> View project</a>
                </div>
              </div>
            </div>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Projects section v.4-->

    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer pt-4 mt-4 text-center text-md-left mdb-color lighten-2">

    <!--Footer Links-->
    <div class="container">
      <div class="row">

        <!--First column-->
        <div class="col-md-3 mr-auto">
          <h5 class="text-uppercase mb-3">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column-->
        <div class="col-md-3 ml-auto">
          <h5 class="text-uppercase mb-3">Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
      <ul class="list-unstyled list-inline">

        <li class="list-inline-item">
          <a class="btn-floating btn-fb">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>

      </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2019 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> MDBootstrap.com </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->


  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });
  </script>
</body>

</html>

