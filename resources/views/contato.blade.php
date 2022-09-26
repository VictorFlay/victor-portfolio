@extends('mdb.mdb-fullpage')
 <!--  teste  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sobre</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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

    <header>

        <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="home#"><strong>TECHWOLF</strong></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="home#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="servico#">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="posts#">Posts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://images.wallpaperscraft.com/image/single/backlight_neon_electronics_144683_1280x720.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <div class="mask rgba-stylish-light">
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12 mb-3">
                        <div class="intro-info-content text-center">
                            <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">SOBRE <a class="white-text font-weight-bold">NÓS</a></h1>
                            <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Techwolf Informática. Soluções em Tecnologia </h5>
                            <a class="btn btn-light-blue btn-lg wow fadeInDown" data-wow-delay="0.3s" a href="posts#">Posts</a>
                            <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" a href="servico#">Serviços</a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    </header>

    <main>

        <div class="container">

            <section id="team" class="section team-section pb-4 wow fadeIn" data-wow-delay="0.3s">

                <h2 class="font-weight-bold text-center h1 my-5">Sobre o Fundador</h2>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Informações referentes a experiência acadêmica e profissional de nosso membro fundador.</p>

                <div class="row mb-lg-4 text-center text-md-left">

                    <div class="col-lg-6 col-md-12 mb-4">

                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://scontent.fcgh10-1.fna.fbcdn.net/v/t39.30808-6/271445794_4766800823410680_6375628259428892075_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=GbH8K41MuxoAX9LRQc8&tn=XNCNZ9DiKlhZ_cMy&_nc_ht=scontent.fcgh10-1.fna&oh=00_AT-C4a67brlTQS2N-Y39sYZyDrjIOgeFrevrjS-2Fu101w&oe=63290F9B" class="z-depth-1" alt="First sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4><strong>Victor Hugo Viana de Alcantara</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Desenvolvedor Web, Analista de Suporte</h6>
                            <p class="grey-text">Nosso membro fundador, Victor Alcantara. Possui formação como técnico em informática. Atualmente cursando Análise & Desenvolvimento de Sistemas no Instituto Federal de São Paulo. Atuou como técnico efetuando manutenção de computadores. Como desenvolvedor de sites em estágio. Atualmente atuando como Sysadmin</p>

                            <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                            <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                            <a class="p-2 m-2 fa-lg dribbble-ic"><i class="fab fa-dribbble"> </i></a>
                        </div>

                    </div>

                    
            </section>

            <hr class="my-5">

            <section id="products" class="text-center wow fadeIn" data-wow-delay="0.3s">

                <h1 class="font-weight-bold text-center h1 my-5">Responsáveis por soluções em tecnologia</h1>
                <p class="text-center grey-text mb-5 mx-auto w-responsive lead">Nossa empresa está por trás de vendas, projetos de desenvolvimento, projetos em infraestrutura, além de montagem e manutenção de computadores</p>

                <div class="row">

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-solid-area  fa-money-bill pink-text"></i>
                        <h4 class="font-weight-bold my-4">Vendas</h4>
                        <p class="grey-text">Diversos produtos disponíveis para venda em nosso site.</p>
                    </div>

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-solid-area fa-code cyan-text"></i>
                        <h4 class="font-weight-bold my-4">Desenvolvimento</h4>
                        <p class="grey-text">Desenvolvimento de sistemas e sites sob demanda. Entre em contato para maiores informações.</p>
                    </div>

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-laptop indigo-text"></i>
                        <h4 class="font-weight-bold my-4">Infraestrutura</h4>
                        <p class="grey-text">Soluções em infraestrutura, montagem e manutenção de computadores. Entre em contato para maiores informações.</p>
                    </div>
                </div>

            </section>
            
            <section id="contact" class="section pb-5 wow fadeIn" data-wow-delay="0.3s">

                <h2 class="font-weight-bold text-center h1 my-5">Contate-nos</h2>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Segue abaixo formulário de contato para que possam falar conosco</p>

                <div class="row">

                    <div class="col-md-8 col-xl-9">
                        <form>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-name" class="form-control">
                                            <label for="contact-name" class="">Seu Nome</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form">
                                            <input type="text" id="contact-email" class="form-control">
                                            <label for="contact-email" class="">Seu Email</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Assunto</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">

                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                        <label for="contact-message">Sua Mensagem</label>
                                    </div>

                                </div>
                            </div>

                        </form>

                        <div class="text-center text-md-left mb-4">
                            <a class="btn btn-light-blue">Enviar</a>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons text-center list-unstyled">
                            <li><i class="fas fa-map-marker fa-2x"></i>
                                <p>Guarulhos, SP 07070-080, Brasil</p>
                            </li>

                            <li><i class="fas fa-phone fa-2x"></i>
                                <p>+5511983124462</p>
                            </li>

                            <li><i class="fas fa-envelope fa-2x"></i>
                                <p>vhugoviana82@gmail.com</p>
                            </li>
                        </ul>
                    </div>

                </div>

            </section>

        </div>

    </main>

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

    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2022 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> Techwolf Informática </a>

      </div>