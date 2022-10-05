@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Serviços</title>

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

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="tecnologia-home#">
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
              <a class="nav-link" href="tecnologia-posts#">Posts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tecnologia-contato#">Contato</a>
            </li>
          </ul>
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            </div>
          </form>
        </div>
      </div>
    </nav>

    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://www.10wallpaper.com/wallpaper/1366x768/1805/Creative_integrated_circuit_high_tech_earth_1366x768.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-white-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 mb-3">
              <div class="intro-info-content text-center">
                <h1 class="display-3 mb-5 wow fadeInDown" data-wow-delay="0.3s">SOLUÇÕES EM
                  <a class="indigo-text font-weight-bold">TECNOLOGIA</a>
                </h1>
                <h5 class ="text-uppercase mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Preço justo e serviço de qualidade</h5>
                <a class="btn btn-outline-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" a href="tecnologia-posts#">Posts</a>
                <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s" a href="tecnologia-contato#">Contato</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>


  <main>

    <div class="container">

      <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

        <h1 class="font-weight-bold text-center h1 my-5">Serviços mais procurados</h1>
        <p class="text-center grey-text mb-5 mx-auto w-responsive">Nossos serviços com maior procura, baseado em análise estatística de dados comportamentais em solicitações de nossos clientes</p>

        <div class="row">

          <div class="col-lg-3 col-md-6 mb-4">

            <div class="card card-ecommerce">

              <div class="view overlay z-depth-1">
                <img src="https://cbltech.com.br/uploads/editor/27715b3856c5fe88c20ca8ceab3ed28e.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body text-center no-padding">
                <a href="" class="text-muted">
                  <h5>Vírus</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="">Remoção de Vírus</a>
                  </strong>
                </h4>

                <p class="card-text">Varreduras e remoções de vírus em computadores e dispositivos móveis
                </p>

                <div class="card-footer">
                  <span class="float-left">R$59
                  </span>
                  <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-3 col-md-6 mb-4">

            <div class="card card-ecommerce">

              <div class="view overlay z-depth-1">
                <img src="https://www.jn2.com.br/wp-content/uploads/2021/10/Empresa-de-desenvolvimento-de-software.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body text-center no-padding">
                <a href="" class="text-muted">
                  <h5>Desenvolvimento</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="">Desenvolvimento de sistemas</a>
                  </strong>
                </h4>

                <p class="card-text">Valores passam por orçamento prévio
                </p>

                <div class="card-footer">
                  <span class="float-left">R$ A combinar
                  </span>
                  <span class="float-right">
                    <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-3 col-md-6 mb-4">

            <div class="card card-ecommerce">

              <div class="view overlay z-depth-1">
                <img src="https://cptstatic.s3.amazonaws.com/imagens/enviadas/materias/materia19916/profissao-tecnologia-informacao-artigos-cursos-cpt.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body text-center no-padding">
                <a href="" class="text-muted">
                  <h5>Manutenção</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="">Manutenção de computadores</a>
                  </strong>
                </h4>

                <p class="card-text">Orçamentos à partir de R$150 reais
                </p>

                <div class="card-footer">
                  <span class="float-left">R$150
                  </span>
                  <span class="float-right">
                    <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-3 col-md-6 mb-4">

            <div class="card card-ecommerce">

              <div class="view overlay z-depth-1">
                <img src="https://www.gruposeres.com.br/wp-content/uploads/2018/06/tecnologia-no-rh-1.jpg" class="card-img-top"
                  alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body text-center no-padding">
                <a href="" class="text-muted">
                  <h5>Acessórios</h5>
                </a>
                <h4 class="card-title">
                  <strong>
                    <a href="">Acessórios de tecnologia</a>
                  </strong>
                </h4>

                <p class="card-text">Vendas de acessórios de tecnologia
                </p>

                <div class="card-footer">
                  <span class="float-left">R$50
                    <span class="discount">R$4000</span>
                  </span>
                  <span class="float-right">
                    <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist">
                      <i class="fas fa-heart"></i>
                    </a>
                  </span>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

      <hr class="mb-5 mt-4">

      <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

        <h1 class="font-weight-bold text-center h1 my-5">Nossos produtos</h1>
        <p class="text-center grey-text mb-5 mx-auto w-responsive">De notebooks a smartphones, de hardware ao software</p>

        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

          <div class="controls-top">
            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
              <i class="fas fa-chevron-right"></i>
            </a>
          </div>

          <ol class="carousel-indicators">
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
            <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">

              <div class="col-md-4">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/92357/92357_index_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Fones</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Headset Gamer HyperX</a>
                      </strong>
                    </h4>

                    <p class="card-text">O Headset Gamer HyperX Cloud Alpha é o acessório que você precisava para seus jogos! Este belíssimo headset possui câmaras duplas que atuam perfeitamente no som, separando por completo os sons graves, dos médios e agudos. Isso faz com que as distorções sejam reduzidas e a qualidade boa do som se mantenha por todo o tempo.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 449,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/112991/processador-intel-core-i5-10400f-cache-12mb-2-9ghz-lga-1200-bx8070110400f_1589199929_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Processadores</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Processador Intel Core i5-10400F, 2.9GHz</a>
                      </strong>
                    </h4>

                    <p class="card-text">Processador Intel Core i5-10400F Os novos processadores Intel Core da 10ª Geração oferecem atualizações de desempenho incríveis para melhorar a produtividade e proporcionar entretenimento surpreendente, incluindo até 5,3 GHz, Intel® Wi-Fi 6 (Gig) tecnologia Thunderbolt™ 3, HDR 4K, otimização de sistema inteligentes e muito mais.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 849,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/357521/smartphone-samsung-galaxy-m13-4gb-ram-128gb-octa-core-camera-tripla-50mp-tela-infinita-6-6-azul-sm-m135mlbszto_1656341077_gg.jpg" class="card-img-top" alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Smartphones</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Smartphone Samsung Galaxy M13</a>
                      </strong>
                    </h4>

                    <p class="card-text">Smartphone Samsung Galaxy M13 128GB Azul Bateria que dura o dia todo
                     Com bateria de 5.000 MAh, o Samsung Galaxy M13 é um smartphone Android completo sem nada a invejar nos dispositivos mais avançados.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 1.099,00</span>
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

                </div>

              </div>

            </div>

            <div class="carousel-item">

              <div class="col-md-4">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/128561/console-microsoft-xbox-series-s-500gb-branco-rrs-00006_1601067301_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Videogames</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Console Microsoft Xbox Series S</a>
                      </strong>
                    </h4>

                    <p class="card-text">Xbox Series S, o menor e mais elegante de todos os tempos. Com taxas de quadros mais altas, tempos de carregamento mais rápidos e mundos mais ricos e dinâmicos, o Xbox Series S oferece desempenho e velocidade de última geração em um formato compacto e totalmente digital
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 2.299,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/228599/hd-externo-seagate-expansion-1tb-usb-ps4-xbox-preto-stkm1000400_1631630670_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>HD's</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">HD Externo Seagate Expansion 1TB</a>
                      </strong>
                    </h4>

                    <p class="card-text">HD Externo Seagate Expansion 1TB, USB. Disco Seagate Expansion para desktop armazenamento extra para o seu PC e Mac. A unidade portátil Seagate Expansion é compacta e perfeita para viagens. Adicione instantaneamente mais espaço de armazenamento ao seu PC ou Mac e leve arquivos grandes com você quando viajar.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 299,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/307100/notebook-gamer-lenovo-legion-5-ryzen-7-5800h-16gb-ram-nvidia-geforce-rtx-3050-512gb-ssd-15-6-full-hd-windows-11-preto-82qj0000br_1643724112_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Notebooks</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Notebook Gamer Lenovo Legion 5 AMD Ryzen 7-5800H</a>
                      </strong>
                    </h4>

                    <p class="card-text">Notebook Gamer Lenovo Legion 5 Ryzen 7-5800H, 16GB RAM, NVIDIA GeForce RTX 3050, 512GB SSD
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 6.599,99</span>
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

                </div>

              </div>

            </div>

            <div class="carousel-item">

              <div class="col-md-4">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/92590/92590_index_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Teclados</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Teclado Mecânico Gamer HyperX Mars RGB</a>
                      </strong>
                    </h4>

                    <p class="card-text">Teclado Mecânico Gamer HyperX Mars O Teclado Mecânico Gamer HyperX Mars é ideal para gamers que teclam diversas teclas por segundo, graças ao seu Switch Outemu Blue, é possível processar todos os movimentos, sem a chave de o usuário perder alguns deles.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 319,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/255428/notebook-acer-intel-core-i5-10210u-4gb-ssd-256gb-windows-10-home-15-6-full-hd-ultrafino-prata-a515-54-579s_1636742618_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>Notebook</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">Notebook Acer Aspire 5</a>
                      </strong>
                    </h4>

                    <p class="card-text">Notebook Acer Aspire 5 Intel Core i5–10210U. Suas Tarefas com Mais Fluidez!
                    Os notebooks da linha Aspire 5 são convenientemente portáteis e elegantes para acompanhar suas tarefas do dia a dia. Os recursos tecnológicos de sua confiança ao seu lado sempre que precisar. Desempenho suficiente para todas as tarefas, com o processador Intel Quad Core de 10ª geração. Você cria, edita, compartilha e assiste vídeos, fotos e imagens sem dificuldades.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 2.999,99</span>
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

                </div>

              </div>

              <div class="col-md-4 clearfix d-none d-sm-block">

                <div class="card card-cascade narrower card-ecommerce">

                  <div class="view view-cascade overlay">
                    <img src="https://images.kabum.com.br/produtos/fotos/85196/85196_index_gg.jpg" class="card-img-top"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <div class="card-body card-body-cascade text-center no-padding">
                    <a href="" class="text-muted">
                      <h5>SSD's</h5>
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="">SSD Kingston A400</a>
                      </strong>
                    </h4>

                    <p class="card-text">SSD Kingston A400 é o mais confiável e durável do que um disco rígido
                    A unidade de estado sólido A400 da Kingston aumenta drasticamente a resposta do seu computador com tempos incríveis de inicialização, carregamento e transferência, comparados a discos rígidos mecânicos.
                    </p>

                    <div class="card-footer">
                      <span class="float-left">R$ 139,99</span>
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

                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

    </div>

    <div class="streak streak-photo" style="background-image:url('https://img.freepik.com/fotos-premium/conceito-de-experiencia-do-cliente-cliente-feliz-dando-uma-revisao-positiva-excelente-feedback-para-produtos-e-servicos-pesquisas-de-satisfacao-do-cliente-estrategia-de-marketing_34048-1836.jpg')">

      <div class="flex-center white-text pattern-1" style="background-attachment: f">
        <ul class="list-unstyled">
          <li>
            <h1 class=" white-text">
              <strong>+500</strong> clientes felizes</h1>
          </li>

        </ul>
      </div>

    </div>
    
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
    </div>


  </footer>

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
    $(document).ready(() => {
      new WOW().init();
    });
  </script>
</body>

</html>
