@extends('mdb.mdb-fullpage')
<!DOCTYPE html>
<html lang="en" class="">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home Portfólio</title>

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

    @media (min-width: 560px) and (max-width: 660px) {
      header .jarallax h5 {
        display: none !important;
      }
    }

    .page-footer {
      margin-top: 0px;
      padding-top: 0px;
    }

  </style>

</head>

<body>

  <!--Main Navigation-->
  <header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <strong>TECHWOLF</strong>
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
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
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
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://wonderfulengineering.com/wp-content/uploads/2014/04/code-wallpaper-38.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-indigo-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">MEU
                  <a class="black-text font-weight-bold">PORTFÓLIO</a>
                </h1>
                <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Projetos & Serviços</h5>
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

      <!--Section: Team v.1-->
      <section class="text-center team-section">

        <!--Grid row-->
        <div class="row text-center">

          <!--Grid column-->
          <div class="col-md-12 mb-4" style="margin-top: -100px;">

            <div class="avatar mx-auto">
              <img src="https://scontent.fcgh10-1.fna.fbcdn.net/v/t39.30808-6/271445794_4766800823410680_6375628259428892075_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=jLEedXh54M4AX_856wU&tn=XNCNZ9DiKlhZ_cMy&_nc_ht=scontent.fcgh10-1.fna&oh=00_AT9vNU7VdLXjC8NLC2PkmTYr7S_EOpoUdwXsfc61qJTTGQ&oe=6338E19B" class="img-fluid rounded-circle z-depth-1"
                alt="First sample avatar image">
            </div>
            <h3 class="my-3 font-weight-bold">
              <strong>Victor Alcantara</strong>
            </h3>
            <h6 class="font-weight-bold teal-text mb-4">Desenvolvedor Front End</h6>

            <!--Facebook-->
            <a class ="p-2 m-2 fa-lg fb-ic" href="https://www.facebook.com/victor.flay">
              <i class="fab fa-facebook grey-text"> </i>
            </a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic" href="https://github.com/VictorFlay">
              <i class="fab fa-github grey-text"> </i>
            </a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic"href="https://www.linkedin.com/in/victor-hugo-viana-de-alcantara-60103117b/">
              <i class="fab fa-linkedin grey-text"> </i>
            </a>

            <p class="mt-5">Desenvolvimento do front end de websites de todos os tipos. 
              Seguem modelos do layout desenvolvido para diferentes seguimentos de atuação no mercado. Para entrar em contato para orçamentos, basta acessar o link sobre.</p>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Team v.1-->

      <!--Section: Tabs-->
      <section>

        <ul class="nav md-pills pills-default d-flex justify-content-center">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel11" role="tab">
              <strong>Trabalhos</strong>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">
              <strong>My team</strong>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">
              <strong>Portfolio</strong>
            </a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">

          <!--Panel 1-->
          <div class="tab-pane fade  show active" id="panel11" role="tabpanel">
            <br>

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <!--Projects section v.4-->
                <section class="text-center mb-5">

                  <!--Grid row-->
                  <div class="row mb-4">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://www.brightcom.biz/wp-content/uploads/2017/10/Sfondo-scuro-1024x614.jpg');">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-blue-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>Tecnologia</strong>
                            </h3>
                            <p>Site voltado para o ramo de atuação em tecnologia. Focado em desenvolvimento e infraestrutura. 
                              Além de apresentar layouts de menu com cards em formato carrossel para vendas</p>
                            <a class ="btn btn-outline-white btn-sm" >
                              <i class="fas fa-clone left"></i> Ver Projeto</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(14).jpg');">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-teal-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                              voluptatem,
                              optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                              dignissimos.
                              Odit sed qui, dolorum!.</p>
                            <a class="btn btn-outline-white btn-sm">
                              <i class="fas fa-clone left"></i> View project</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(11).jpg');">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-green-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                              voluptatem,
                              optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                              dignissimos.
                              Odit sed qui, dolorum!.</p>
                            <a class="btn btn-outline-white btn-sm">
                              <i class="fas fa-clone left"></i> View project</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg');">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-stylish-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>Project title</strong>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam,
                              voluptatem,
                              optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                              dignissimos.
                              Odit sed qui, dolorum!.</p>
                            <a class="btn btn-outline-white btn-sm">
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
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </div>
          <!--/.Panel 1-->

          <!--Panel 2-->
          <div class="tab-pane fade" id="panel12" role="tabpanel">
            <br>

            <!-- Section: Team v.3 -->
            <section id="team" class="section team-section pb-4">

              <!-- Section heading -->
              <h2 class="font-weight-bold text-center h1 my-5">Our amazing team</h2>
              <!-- Section description -->
              <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam
                voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

              <!-- Grid row -->
              <div class="row mb-lg-4 text-center text-md-left">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4">

                  <div class="col-md-6 float-left">
                    <div class="avatar mx-auto mb-md-0 mb-3">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="z-depth-1" alt="First sample avatar image">
                    </div>
                  </div>

                  <div class="col-md-6 float-right">
                    <h4><strong>John Doe</strong></h4>
                    <h6 class="font-weight-bold grey-text mb-4">Web Designer</h6>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                      hic tenetur.</p>

                    <!-- Facebook -->
                    <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                    <!-- Twitter -->
                    <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                    <!-- Dribbble -->
                    <a class="p-2 m-2 fa-lg dribbble-ic"><i class="fab fa-dribbble"> </i></a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4">

                  <div class="col-md-6 float-left">
                    <div class="avatar mx-auto mb-md-0 mb-3">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="z-depth-1" alt="Second sample avatar image">
                    </div>
                  </div>

                  <div class="col-md-6 float-right">
                    <h4><strong>Maria Kate</strong></h4>
                    <h6 class="font-weight-bold grey-text mb-4">Photographer</h6>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                      hic tenetur.</p>

                    <!-- Facebook -->
                    <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                    <!-- YouTube -->
                    <a class="p-2 m-2 fa-lg yt-ic"><i class="fab fa-youtube"> </i></a>
                    <!-- Instagram -->
                    <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram"> </i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row text-center text-md-left">

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4">

                  <div class="col-md-6 float-left">
                    <div class="avatar mx-auto mb-md-0 mb-3">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="z-depth-1" alt="Fourth sample avatar image">
                    </div>
                  </div>

                  <div class="col-md-6 float-right">
                    <h4><strong>Anna Deynah</strong></h4>
                    <h6 class="font-weight-bold grey-text mb-4">Web Developer</h6>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                      hic tenetur.</p>

                    <!-- Facebook -->
                    <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f"> </i></a>
                    <!-- Twitter -->
                    <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter"> </i></a>
                    <!-- GitHub -->
                    <a class="p-2 m-2 fa-lg git-ic"><i class="fab fa-github"> </i></a>
                  </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4">
                  <div class="col-md-6 float-left">
                    <div class="avatar mx-auto mb-md-0 mb-3">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="z-depth-1" alt="Fifth sample avatar image">
                    </div>
                  </div>

                  <div class="col-md-6 float-right">
                    <h4><strong>Sarah Melyah</strong></h4>
                    <h6 class="font-weight-bold grey-text mb-4">Front-end Developer</h6>
                    <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis
                      hic tenetur.</p>

                    <!-- Google + -->
                    <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g"> </i></a>
                    <!-- LinkedIn -->
                    <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in"> </i></a>
                    <!-- Email -->
                    <a class="p-2 m-2 fa-lg email-ic"><i class="fas fa-envelope"> </i></a>
                  </div>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </section>
            <!-- Section: Team v.3 -->
          </div>
          <!--/.Panel 2-->

          <!--Panel 3-->
          <div class="tab-pane fade" id="panel13" role="tabpanel">
            <br>

            <div class="row d-flex justify-content-center">
              <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox no-gutters">

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(71).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(71).jpg" class="img-fluid">
                    </a>
                  </figure>

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(65).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(65).jpg" class="img-fluid" />
                    </a>
                  </figure>

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(84).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(84).jpg" class="img-fluid" />
                    </a>
                  </figure>

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(88).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(88).jpg" class="img-fluid" />
                    </a>
                  </figure>

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(79).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(79).jpg" class="img-fluid" />
                    </a>
                  </figure>

                  <figure class="col-md-4">
                    <a href="https://mdbootstrap.com/img/Mockups/Lightbox/Original/img%20(81).jpg" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(81).jpg" class="img-fluid" />
                    </a>
                  </figure>

                </div>

              </div>
            </div>

          </div>
          <!--/.Panel 3-->

          <!--Panel 4-->
          <div class="tab-pane fade" id="panel14" role="tabpanel">
            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
              reiciendis
              molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro
              voluptate
              odit minima.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
              reiciendis
              molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro
              voluptate
              odit minima.</p>

          </div>
          <!--/.Panel 4-->

        </div>

      </section>
      <!--Section: Tabs-->

    </div>

  </main>
  <!--Main Layout-->

  <!--Footer-->
  <footer class="page-footer mdb-color lighten-3 text-center text-md-left">

    <!--Footer Links-->
    <div class="container">

      <!--First row-->
      <div class="row">
        <div class="col-md-12">

          <h5 class="my-5 d-flex justify-content-center">Deseja me contatar? Envie-me um E-mail em vhugoviana82@gmail.com</h5>
        </div>
      </div>
      <!--/First row-->
    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright text-center py-3 wow fadeIn" data-wow-delay="0.3s">
      <div class="container-fluid">
        &copy; 2022 Copyright:
        <a href="https://mdbootstrap.com/docs/jquery/"> Techwolf Informática </a>
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

    // MDB Lightbox Init
    $(function () {
      $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
    });

  </script>
</body>

</html>
