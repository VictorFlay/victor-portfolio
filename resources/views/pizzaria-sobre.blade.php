@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Required meta tags always come first  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sobre Nós!</title>
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Custom styles -->
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
            margin-bottom: 1.5rem !important;
          }
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #3f51b5!important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent!important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5!important;
            }
        }
        h5 {
            letter-spacing: 3px;
        }
    </style>
</head>
<body>

    <!-- Main Navigation -->
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="pizzaria-home#"><strong>PIZZARIA</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="portfolio-home#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pizzaria-cardapio#">Cardápio</a>
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
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://pastapizza.com.br/wp-content/uploads/2017/07/Pizza-Pizzaria-Forno-Forza-Express.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">SOBRE <a class="red-text font-weight-bold">NÓS</a></h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Pizzaria  <a class="red-text font-weight-bold">Forno a Lenha</a></h1></h5>
                            <a class="btn btn-red btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-contato#">Contato</a>
                            <a class="btn btn-outline-red btn-lg wow fadeInDown" data-wow-delay="0.3s" href="pizzaria-cardapio#">Cardápio</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </header>
    <!-- Main Navigation -->

    <!-- Main Layout -->
    <main>


            <!-- Section: Features v.1 -->

            <hr class="my-5">

            <!-- Section: Gallery -->
            <section id="gallery" class="section wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h1 class="font-weight-bold text-center h1 my-5">Nossas Pizzas</h1>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Melhores pizzas forno a lenha da região! Sabor incomparável, venha conferir!</p>

                <div class="row pb-4">
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://4-hontario.ca/wp-content/uploads/2020/09/Pizza_Main-Image-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://4-hontario.ca/wp-content/uploads/2020/09/Pizza_Main-Image-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://pizzarte.com/wp-content/uploads/2021/02/pizza-1-uai-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://pizzarte.com/wp-content/uploads/2021/02/pizza-1-uai-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://pizzarte.com/wp-content/uploads/2021/02/pizza-2-uai-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://pizzarte.com/wp-content/uploads/2021/02/pizza-2-uai-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://pizzarte.com/wp-content/uploads/2021/02/pizza-3-uai-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://pizzarte.com/wp-content/uploads/2021/02/pizza-3-uai-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://currykitchengr.com/wp-content/uploads/2020/02/Paneer-Tikka-Pizza-Web-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://currykitchengr.com/wp-content/uploads/2020/02/Paneer-Tikka-Pizza-Web-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://espaco-o.com/wp-content/uploads/2022/08/DSC_0196-1620x1080.jpg" data-size="1600x1067">
                                    <img src="https://espaco-o.com/wp-content/uploads/2022/08/DSC_0196-1620x1080.jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                        </div>

                    </div>

                </div>

            </section>
            <!-- /Section: Gallery -->

            <hr class="my-5">

            <!-- Section: Contact v.2 -->
            <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s">

                <!-- Section heading -->
                <h2 class="font-weight-bold text-center h1 my-5">Críticas e sugestões</h2>
                <!-- Section description -->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Possui uma crítica e/ou sugestão para nos fazer? Estamos abertos a receber o contato de nossos clientes para melhor servi-los. Envie-nos uma mensagem!</p>

                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-9">
                        <form>

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-name" class="form-control">
                                            <label for="contact-name" class="">Seu nome</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-email" class="form-control">
                                            <label for="contact-email" class="">Seu E-mail</label>
                                    </div>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Assunto</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-4">

                                <!-- Grid column -->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="contact-message">Sua Mensagem</label>
                                    </div>

                                </div>
                            </div>
                            <!-- Grid row -->

                        </form>

                        <div class="text-center text-md-left mb-4">
                            <a class="btn btn-light-blue">Enviar</a>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons text-center list-unstyled">
                            <li><i class="fas fa-map-marker fa-2x"></i>
                                <p>Vila Galvão, Guarulhos, SP, Brasil</p>
                            </li>

                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+55 11 98642-2465</p>
                            </li>

                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>pizzariafornoalenha@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->

                </div>

            </section>
            <!-- Section: Contact v.2 -->

        </div>

    </main>
    <!-- Main Layout -->

    <!-- Footer -->
    <footer class="page-footer pt-4 mt-4 indigo text-center text-md-left">

        
        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                &copy; 2022 Copyright: <a href="https://mdbootstrap.com/docs/jquery/"> pizzariafornoalenha.com </a>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

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

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

    </script>
</body>
</html>
