@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pizzaria Contato</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../css/mdb.min.css" rel="stylesheet">

  <style>

    .btn .fas, .btn .fab, .btn .far {
      margin-left: 3px;
    }

    h6 {
      line-height: 1.7;
    }

    footer.page-footer {
      margin-top: 0px;
      padding-top: 0px;
    }

    body {
      background-color: #eee;
    }

    .btn.peach-gradient {
      color: #fff !important;
    }

    .map-container-section {
      overflow:hidden;
      /* padding-bottom:56.25%; */
      position:relative;
      height:0;
    }
  .map-container-section iframe {
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }

  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar peach-gradient">
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
              <a class="nav-link" href="portfolio-home#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pizzaria-cardapio#">Cardápio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pizzaria-sobre#">Sobre</a>
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

    <section>
      <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
        <iframe src="https://maps.google.com/maps?q=VilaGalvao&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0"></iframe>
      </div>
    </section>

  </header>
  <!--Main Navigation-->

  <!--Main Layout-->
  <main>

    <div class="container-fluid mb-5">

      <!--Grid row-->
      <div class="row" style="margin-top: -100px;">

        <!--Grid column-->
        <div class="col-md-12">

          <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!--Section: Contact v.2-->
                <section class="section">

                  <!--Section heading-->
                  <h2 class="font-weight-bold text-center h1 my-5">Faça seus pedidos pelo WhatsApp</h2>
                  <!--Section description-->
                  <p class="text-center grey-text mb-5 mx-auto w-responsive">Críticas e sugestões, basta utilizar o formulário abaixo.</p>

                  <div class="row pt-5">

                    <!--Grid column-->
                    <div class="col-md-8 col-xl-9">
                      <form>

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-name" class="form-control">
                              <label for="contact-name" class="">Seu nome</label>
                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                            <div class="md-form">
                              <input type="text" id="contact-email" class="form-control">
                              <label for="contact-email" class="">Seu E-mail</label>
                            </div>
                          </div>
                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form">
                              <input type="text" id="contact-Subject" class="form-control">
                              <label for="contact-Subject" class="">Assunto</label>
                            </div>
                          </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                            <div class="md-form">
                              <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                              <label for="contact-message">Sua Mensagem</label>
                            </div>

                          </div>
                        </div>
                        <!--Grid row-->

                      </form>

                      <div class="text-center text-md-left my-4">
                        <a class="btn peach-gradient">Enviar</a>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 col-xl-3">
                      <ul class="contact-icons text-center list-unstyled">
                        <li>
                          <i class="fas fa-map-marker fa-2x orange-text"></i>
                          <p>Vila Galvão, Guarulhos, SP, Brasil</p>
                        </li>

                        <li>
                          <i class="fas fa-phone fa-2x orange-text"></i>
                          <p>+55 11 98642-2465</p>
                        </li>

                        <li>
                          <i class="fas fa-envelope fa-2x orange-text"></i>
                          <p>pizzariafornoalenha@gmail.com</p>
                        </li>
                      </ul>
                    </div>
                    <!--Grid column-->

                  </div>

                </section>
                <!--Section: Contact v.2-->

              </div>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>

    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer pt-4 mt-4   grey lighten-3 text-center text-md-left">

    <!--Copyright-->
    <div class="footer-copyright text-center py-3 wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        &copy; 2022 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> pizzariafornoalenha.com </a>

      </div>
    </div>
    <!--/Copyright-->

  </footer>
  <!--/Footer-->

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
