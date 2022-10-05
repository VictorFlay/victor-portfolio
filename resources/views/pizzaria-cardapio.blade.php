@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pizzaria Cardápio</title>

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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="pizzaria-home#">
          <strong>PIZZARIA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="pizzaria-home#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pizzaria-sobre#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pizzaria-contato#">Contato</a>
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
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://cdn.pixabay.com/photo/2020/03/21/02/26/pizza-4952508_960_720.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-white-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">PIZZARIA
                  <a class="red-text font-weight-bold">CARDÁPIO</a>
                </h1>
                <h5 class="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Entregas Grátis 
                  & <a class="red-text font-weight-bold">Preços especiais</a>
                </h5>
                <a class="btn btn-outline-red btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#" color="red">Fazer pedido</a>
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
        <h1 class="font-weight-bold text-center h1 my-5">Faça seu pedido!</h1>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card card-ecommerce">

              <!--Card image-->
              <div class="view overlay z-depth-1">
                <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZQU.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <h4 class="card-title">
                  <strong>
                    <a href="pizzaria-contato#" class="red-text">3 Queijos</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Queijo, requeijão, oregano e parmesão ralado.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">63,00R$
                  </span>
                </div>
                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
                <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZCLB.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Calabresa</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Queijo, calabresa e cebola, oregano.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">60,00R$
                  </span>
                </div>
                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
                <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZMUS.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Mussarela</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Queijo mussarela, azeite e orégano.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">57,00R$
                    </a>
                  </span>
                </div>
                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
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
                <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZMG.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center no-padding">
                <!--Category & Title-->
                <h4 class="card-title">
                  <strong>
                    <a href="" class="red-text">Peperoni</a>
                  </strong>
                </h4>

                <!--Description-->
                <p class="card-text">Queijo mussarela, oregano e pepperoni.
                </p>

                <!--Card footer-->
                <div class="card-footer">
                  <span class="float-center">60,00R$
                  </span>
                </div>
                <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
              </div>
              <!--Card content-->
    
            </div>
            <!--Card-->

          </div>
          <!--Fourth column-->

        </div>
        <!--Grid row-->

      </section>
              <!--Grid row-->
              <div class="row">

<!--Grid column-->
<div class="col-lg-3 col-md-6 mb-4">

  <!--Card-->
  <div class="card card-ecommerce">

    <!--Card image-->
    <div class="view overlay z-depth-1">
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZFQ.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="pizzaria-contato#" class="red-text">4 Queijos</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Mussarela, requeijão, gorgonzola, oregano e parmesão ralado.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">70,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZFR.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Frango c/ requeijão</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text"> Frango desfiado, cebola, oregano e requeijão
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">63,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZBU.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Bauru</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Mussarela, presunto, requeijão, oregano e tomate.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">61,00R$
          </a>
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
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
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZCU.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Catuperoni</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Mussarela, pepperoni, requeijão, oregano e parmesão ralado.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">67,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
    </div>
    <!--Card content-->

  </div>
  <!--Card-->

</div>
<!--Fourth column-->

</div>
<!--Grid row-->

</section>
              <!--Grid row-->
              <div class="row">

<!--Grid column-->
<div class="col-lg-3 col-md-6 mb-4">

  <!--Card-->
  <div class="card card-ecommerce">

    <!--Card image-->
    <div class="view overlay z-depth-1">
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZECAL.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="pizzaria-contato#" class="red-text">Calabresa Especial</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Mussarela, calabresa, cebola, oregano e Cream Cheese.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">70,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZPLF.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Frango c/ Queijo</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text"> Queijo, frango, Cream Cheese, oregano e parmesão ralado.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">72,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>

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
      <img src="https://cache.dominos.com/wam/prod/market/BR/_pt/images/promo/3e15ada2-48be-488d-9d0b-2bd4164cd64e.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Frango c/ barbecue</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Barbecue, queijo, frango, cebola, oregano e parmesão.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">72,00R$
          </a>
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
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
      <img src="https://cache.dominos.com/olo/6_95_4/assets/build/market/BR/_pt/images/img/products/larges/S_PIZMX.jpg" class="card-img-top"
        alt="">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Card image-->

    <!--Card content-->
    <div class="card-body text-center no-padding">
      <!--Category & Title-->
      <h4 class="card-title">
        <strong>
          <a href="" class="red-text">Meat & bacon</a>
        </strong>
      </h4>

      <!--Description-->
      <p class="card-text">Mussarela, bacon, calabresa, pepperoni, oregano e presunto.
      </p>

      <!--Card footer-->
      <div class="card-footer">
        <span class="float-center">73,00R$
        </span>
      </div>
      <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Fazer Pedido</a>
    </div>
    <!--Card content-->

  </div>
  <!--Card-->

</div>
<!--Fourth column-->

</div>
<!--Grid row-->

</section>
      
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
          <a class="btn-floating btn-tw">
            <i class="fab fa-whatsapp"> </i>
          </a>
        </li>
      </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2022 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> pizzariafornoalenha.com </a>

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
