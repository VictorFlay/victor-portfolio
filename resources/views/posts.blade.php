@extends('mdb.mdb-fullpage')

<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Notícias</title>

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
          header .jarallax h5 {
            margin-bottom: 1.5rem !important;
          }
        }

        .top-nav-collapse {
            background-color: #6f7782 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #6f7782 !important;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #6f7782!important;
            }
        }
        h1 {
            letter-spacing: 8px;
        }
        h5 {
            letter-spacing: 3px;
        }
        .hr-light {
            border-top: 3px solid #fff;
            width: 80px;
        }
        footer.page-footer {
            background-color: #6f7782;
        }

        @media (max-width: 450px) {
            .btn-floating {
                margin-left: 0;
                margin-right: 0;
            }
        }

    </style>

</head>

<body>


  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="home#"><strong>TECHWOLF</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servico#">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato#">Contato</a>
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

    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(https://i.pinimg.com/originals/ab/65/25/ab6525b299477019027ddbd33a90c4b7.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>Notícias</strong></h1>
                <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Ciência &
                    Tecnologia</strong></h5>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s" a href="home#">Home</a>
                <a class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Sobre</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>


  <main>

    <div class="container">

      <section class="section extra-margins pb-3 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

        <h2 class="font-weight-bold text-center h1 my-5">Postagens recentes</h2>
  <main>

<div class="container">

  <section class="section mt-5 pb-3 wow fadeIn">

    <div class="row">
      <div class="col-md-12">
        <div class="card card-cascade wider reverse">

          <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://tm.ibxk.com.br/2022/09/14/14101326933046.jpg?ims=1120x420" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <div class="card-body card-body-cascade text-center">
            <h2><a><strong>Vazamento indica que a RTX 4090 terá preço absurdo no lançamento</strong></a></h2>
            <p>Escrito por <a>Tecmundo</a>, 15/09/2022</p>

            <div class="social-counters ">

              <a class="btn btn-fb ">
                <i class="fab fa-facebook-f left "></i>
                <span class="clearfix d-none d-md-block">Facebook</span>
              </a>
              <span class="counter ">46</span>

              <a class="btn btn-tw ">
                <i class="fab fa-twitter left "></i>
                <span class="clearfix d-none d-md-block">Twitter</span>
              </a>
              <span class="counter ">22</span>

              <a class="btn btn-dribbble ">
                <i class="fab fa-dribbble left "></i>
                <span class="clearfix d-none d-md-block">Dribbble</span>
              </a>
              <span class="counter ">31</span>

              <a class="btn btn-blue-grey ">
                <i class="fas fa-comments left "></i>
                <span class="clearfix d-none d-md-block">Commentários</span>
              </a>
              <span class="counter ">18</span>

            </div>

          </div>
        </div>

        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
          <p>A Nvidia está prestes a anunciar sua nova geração de placas de vídeo nos próximos dias durante sua conferência na GTC 2022, porém, algumas lojas já estão vazando os exemplares em listagens e até mesmo os preços dos produtos.
          </p>

          <p>No vazamento da vez, a revendedora vietnamita AZPC Workstation está oferecendo a pré-compra da RTX 4090, futura flagship da companhia, em duas versões: uma básica de 50 milhões de dongs vietnamitas e a versão premium, no valor de 60 milhões de dongs.</p>
          <p>Ainda não sabemos o que significam os modelos "básico" e "premium , mas através de uma conversão simples para o dólar norte-americano, o placa mais em conta sairia por US$ 2.100, enquanto o modelo mais parrudo chegaria ao mercado por US$ 2.250. Em reais, os valores são ainda mais assustadores, partindo de R$ 10,6 mil para até R$ 12,8 mil.</p>
          <strong>Comparando os preços</strong>
          <p>Se olharmos em retrospecto, em 2020 a RTX 3090 foi lançada por US$ 1.499, e na cotação do dólar naquela época, tinha preço convertido de R$ 8.050. Já o modelo mais recente, a RTX 3090 Ti, foi lançada pela Nvidia por US$ 1.999 (R$ 9,7 mil na época).</p>
          <p>A RTX 4090 chega para ser a GPU topo de linha da marca e deve ser a primeira placa de vídeo da linha RTX 40XX a ser anunciada durante a GTC ainda no fim deste mês. O modelo, no entanto, só deve ser lançado ao mercado em meados de outubro.</p>
          <p>Segundo rumores recentes, a GPU deve ter mais de 16.000 núcleos CUDA, 128 stream processors, clock de 2.235 Mhz, 24 GB de memória VRAM e TDP na faixa dos 450W. No futuro, ainda há a expectativa de uma versão ainda mais potente ser lançada: a RTX 4090 Ti, que poderia contar com até 48 GB de memória VRAM.</p>


          <div class="mt-4 d-flex justify-content-end">
            <span class="badge pink">Ciência</span>
            <span class="badge badge-primary mx-1">Tecnologia</span>
            <span class="badge grey mr-1">Hardware</span>
            <span class="badge badge-info">Software</span>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-cascade wider reverse">

          <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://tm.ibxk.com.br/2022/09/14/14084846678006.jpg?ims=1120x420" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <div class="card-body card-body-cascade text-center">
            <h2><a><strong>Samsung vai remover todos os botões dos seus celulares, diz rumor</strong></a></h2>
            <p>Escrito por <a>Tecmundo</a>, 15/09/2022</p>

            <div class="social-counters ">

              <a class="btn btn-fb ">
                <i class="fab fa-facebook-f left "></i>
                <span class="clearfix d-none d-md-block">Facebook</span>
              </a>
              <span class="counter ">46</span>

              <a class="btn btn-tw ">
                <i class="fab fa-twitter left "></i>
                <span class="clearfix d-none d-md-block">Twitter</span>
              </a>
              <span class="counter ">22</span>

              <a class="btn btn-dribbble ">
                <i class="fab fa-dribbble left "></i>
                <span class="clearfix d-none d-md-block">Dribbble</span>
              </a>
              <span class="counter ">31</span>

              <a class="btn btn-blue-grey ">
                <i class="fas fa-comments left "></i>
                <span class="clearfix d-none d-md-block">Commentários</span>
              </a>
              <span class="counter ">18</span>

            </div>

          </div>
        </div>

        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
          <p>A Samsung deve remover todos os botões físicos dos seus smartphones em um futuro breve. De acordo com um rumor, a mudança fará com que todas as ações realizadas pelos botões (como aumentar ou reduzir o volume, e até desligar os aparelhos) sejam executadas apenas via software.</p>
          <p>O boato também sugere que a mudança não aconteça já no próximo ano, como na suposta linha Galaxy S23 ou nos dobráveis Galaxy Z Flip 5 ou Z Fold 5. No entanto, a Samsung estaria se preparando para fazer essa grande mudança com o lançamento do Galaxy S25.</p>
          <p>Como o lançamento do suposto Galaxy S25 ainda está bem distante, é muito provável que os planos da sul-coreana mudem até lá. Também vale pontuar que as informações reveladas pelo usuário "@OreXDA" surgem como apenas boatos.</p>
          <p>O rumor em questão sugere, também, que o suposto smartphone da Samsung sem botões seja exclusivo da operadora KT Corporation, da Coreia do Sul. Ou seja, caso se concretize, ainda existe a chance de que a versão global da futura linha de aparelhos mantenha os botões.</p>
          <strong>Smartphones sem botão serão o futuro?</strong>
          <p>Essa não é a primeira vez que a Samsung é envolvida em boatos do tipo. Em 2021, patentes da companhia revelaram um aparelho com tela dobrável, que seria o Galaxy Z Fold 3, também sem botões físicos, o que não se concretizou. Antes disso, outra patente registrada pela empresa citava uma "borda digital" se referindo à tecnologia, que funcionaria sob toques na lateral.</p>
          <p>A Apple também já foi alvo de rumores citando que a companhia poderia abandonar todos os botões físicos do iPhone. Como bem sabemos, até então, a empresa segue fabricando aparelhos com botões de volume e energia.</p>


          <div class="mt-4 d-flex justify-content-end">
            <span class="badge pink">Ciência</span>
            <span class="badge badge-primary mx-1">Tecnologia</span>
            <span class="badge grey mr-1">Hardware</span>
            <span class="badge badge-info">Software</span>
          </div>

        </div>
      </div>
    </div>

  </section>
  <div class="container">

  <section class="section mt-5 pb-3 wow fadeIn">

    <div class="row">
      <div class="col-md-12">
        <div class="card card-cascade wider reverse">

          <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://tm.ibxk.com.br/2022/09/13/13134242761148.jpg?ims=1120x420" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <div class="card-body card-body-cascade text-center">
            <h2><a><strong>Telescópio Hubble fotografa espiral de estrelas; veja imagem</strong></a></h2>
            <p>Escrito por <a>Tecmundo</a>, 15/09/2022</p>

            <div class="social-counters ">

              <a class="btn btn-fb ">
                <i class="fab fa-facebook-f left "></i>
                <span class="clearfix d-none d-md-block">Facebook</span>
              </a>
              <span class="counter ">46</span>

              <a class="btn btn-tw ">
                <i class="fab fa-twitter left "></i>
                <span class="clearfix d-none d-md-block">Twitter</span>
              </a>
              <span class="counter ">22</span>

              <a class="btn btn-dribbble ">
                <i class="fab fa-dribbble left "></i>
                <span class="clearfix d-none d-md-block">Dribbble</span>
              </a>
              <span class="counter ">31</span>

              <a class="btn btn-blue-grey ">
                <i class="fas fa-comments left "></i>
                <span class="clearfix d-none d-md-block">Commentários</span>
              </a>
              <span class="counter ">18</span>

            </div>

          </div>
        </div>

        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
          <p>Pesquisadores descobriram um grupo de estrelas jovens que está se movendo em espiral para o centro de um aglomerado eu uma galáxia próxima à nossa. Segundo os especialistas, esse movimento responde a perguntas que a astronomia ainda não tinha resposta.</p>
          <p>A descoberta foi feita usando dados coletados por 11 anos pelo Telescópio Espacial Hubble. Ao mesmo tempo, foi confirmada por cientistas trabalhando no Very Large Telescope do Observatório Europeu do Sul.</p>
          <p>Nesse período, o Hubble ficou de olho no conglomerado NGC 346 da Pequena Nuvem de Magalhães. Ele coletou informações o suficiente para que a astrônoma Elena Sabbi medisse cada mudança de posição dessas estrelas.</p>
          <p>A pesquisadora do Instituto de Ciências do Telescópio Espacial, nos Estados Unidos, descobriu que esses astros se movem com uma velocidade média de 3.200 quilômetros por hora - em 11 anos isso significa 2 vezes a distância entre a Terra e o Sol.</p>
          <p>Por conta da distância, a descoberta só foi possível graças ao longo tempo de observação e aos potentes equipamentos a bordo do Hubble. Mas outro grupo de cientistas aqui na Terra também suspeitava da importância do NGC 346.</p>
          <p>Peter Zeidler, astrônomo da Agência Espacial Europeia, usou o Very Large Telescope, de Observatório Europeu do Sul, para medir a velocidade radial de algumas estrelas dessa região. Isso permite que ele saiba quais objetos estão se aproximando ou se afastando de nós.</p>
          <p>O equipamento, entretanto, permite olhar além das estrelas: ele também releva o movimento do gás e da poeira espacial e, para a surpresa dos cientistas, esse material também estava espiralando para dentro do conglomerado.</p>
          <p>No fundo, entretanto, a surpresa fez sentido para os especialistas. Uma espiral é uma forma natural de alimentar a formação de novos sóis, segundo eles. O mais importante, entretanto, é que mais uma pista do início do universo foi revelada.</p>
          <p>Isso porque as estrelas são os verdadeiros astros do universo. Determinar as leis físicas que regem sua origem é também desvendar um capítulo importante da história de tudo que há.</p>

          <div class="mt-4 d-flex justify-content-end">
            <span class="badge pink">Ciência</span>
            <span class="badge badge-primary mx-1">Tecnologia</span>
            <span class="badge grey mr-1">Hardware</span>
            <span class="badge badge-info">Software</span>
          </div>


  <hr class="mb-5 mt-4">

  <section class="section extra-margins pb-3 wow fadeIn" data-wow-delay="0.3s">

  <div class="container">

  <section class="section mt-5 pb-3 wow fadeIn">

    <div class="row">
      <div class="col-md-12">
        <div class="card card-cascade wider reverse">

          <div class="view view-cascade overlay">
            <img class="card-img-top" src="https://tm.ibxk.com.br/2022/09/14/14092955304027.jpg?ims=1120x420" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <div class="card-body card-body-cascade text-center">
            <h2><a><strong>GoPro Hero 11 Black é lançada por R$ 4.599 e ganha versão Mini</strong></a></h2>
            <p>Escrito por <a>Tecmundo</a>, 15/09/2022</p>

            <div class="social-counters ">

              <a class="btn btn-fb ">
                <i class="fab fa-facebook-f left "></i>
                <span class="clearfix d-none d-md-block">Facebook</span>
              </a>
              <span class="counter ">46</span>

              <a class="btn btn-tw ">
                <i class="fab fa-twitter left "></i>
                <span class="clearfix d-none d-md-block">Twitter</span>
              </a>
              <span class="counter ">22</span>

              <a class="btn btn-dribbble ">
                <i class="fab fa-dribbble left "></i>
                <span class="clearfix d-none d-md-block">Dribbble</span>
              </a>
              <span class="counter ">31</span>

              <a class="btn btn-blue-grey ">
                <i class="fas fa-comments left "></i>
                <span class="clearfix d-none d-md-block">Commentários</span>
              </a>
              <span class="counter ">18</span>

            </div>

          </div>
        </div>

        <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
          <p>Nesta quarta-feira (14), a GoPro Hero 11 Black foi lançada em três versões: a Hero 11 Black, Creator Edition e Mini. Com o mesmo design da sua antecessora, a mudança fica por conta de um novo sensor de imagem e da chegada de uma versão mais compacta.</p>
          <p>Todos os modelos chegam com um sensor de imagem maior (1/1,9") que permite tirar fotos com até 27 MP, enquanto na edição anterior a resolução era limitada a 23 MP.  É possível ainda fazer capturas de quadro de até 24,7 MP em vídeos.</p>
          <strong>O que muda na nova GoPro?</strong>
          <p>A profundidade de cores agora é de 10 bits, o que significa mais de 1 bilhão de possibilidades de cores nas imagens. A exposição automática também foi aprimorada e a câmera é capaz de fazer vídeos em 5,3K a 60 fps ou em 4K a 120 fps. </p>
          <p>Junto ao processador GP2, mesmo da geração anterior, o novo sensor oferece o campo de visão vertical mais amplo já visto na câmera de ação da marca, sendo 16% maior do que na Hero 10 Black.</p>
          <p>Outra novidade é a lente digital HyperView, uma evolução da SuperView, que permite capturar imagens mais imersivas, com um maior campo de visão nativo de 16:9. De acordo com a marca, em breve, os usuários poderão alternar entre todas as opções de lentes digitais no aplicativo GoPro Quik.</p>
          <p>A estabilização também foi aprimorada graças ao novo sensor de imagem. O HyperSmooth 5.0 permite travar o horizonte mesmo que a câmera dê um giro de 360° e funciona com todas as resoluções e taxas de quadro. Além disso, o novo recurso AutoBoost realiza um ajuste dinâmico que aplica o HyperSmooth quando a câmera detecta um movimento brusco.</p>
          <p>Outras novidades incluem três novas predefinições de efeito noturno com timelapse, o TimeWarp 3.0 que captura em 5,3K e opções de controle "Fácil" e "Pro", que oferecem diferentes opções de configuração para quem está com mais pressa ou quer ter mais controle da câmera.</p>
          <p>A bateria Enduro, modelo otimizado para ambientes de temperaturas mais baixas, promete aumentar o tempo de gravação na Hero 11 em até 38% em relação ao modelo anterior. </p>
          <p>Outros incrementos para fazer a alimentação da câmera durar mais incluem uma otimização do firmware e redução no consumo de energia durante períodos ociosos. Ao optar pelo modo de bateria prolongada, as resoluções de vídeo e taxas de quadros são reduzidas, enquanto a qualidade máxima deixa tudo no mais alto possível.</p>

          <div class="mt-4 d-flex justify-content-end">
            <span class="badge pink">Ciência</span>
            <span class="badge badge-primary mx-1">Tecnologia</span>
            <span class="badge grey mr-1">Hardware</span>
            <span class="badge badge-info">Software</span>
          </div>


  <hr class="mb-5 mt-4">

  
  <section>

    <div class="jumbotron p-5 text-center text-md-left author-box wow fadeIn" data-wow-delay="0.3s">
      <h4 class="h3-responsive text-center font-weight-bold dark-grey-text">Sobre o autor</h4>
      <hr>
      <div class="row">
        <div class="col-12 col-md-2 mb-md-0 mb-4">
          <img src="https://scontent.fcgh10-1.fna.fbcdn.net/v/t39.30808-6/271445794_4766800823410680_6375628259428892075_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=GbH8K41MuxoAX9LRQc8&tn=XNCNZ9DiKlhZ_cMy&_nc_ht=scontent.fcgh10-1.fna&oh=00_AT-C4a67brlTQS2N-Y39sYZyDrjIOgeFrevrjS-2Fu101w&oe=63290F9B" class="img-fluid rounded-circle z-depth-2">
        </div>
        <div class="col-12 col-md-10">
          <h5 class="font-weight-bold dark-grey-text mb-3">
            <strong>Victor Hugo Viana de Alcantara</strong>
          </h5>
          <div class="personal-sm pb-3">
            <a class="fb-ic pr-2"><i class="fab fa-facebook-f mr-2"> </i></a>
            <a class="tw-ic pr-2"><i class="fab fa-twitter mr-2"> </i></a>
            <a class="gplus-ic pr-2"><i class="fab fa-google-plus-g mr-2"> </i></a>
            <a class="li-ic pr-2"><i class="fab fa-linkedin-in mr-2"> </i></a>
          </div>
          <p>Estudante de Análise e Desenvolvimento de Sistemas no Instituto Federal de São Paulo</p>
          <p>Trabalho efetuado para a disciplina Linguagem de Programação II. Professor: Reginaldo do Prado.
          </p>
        </div>
      </div>
    </div>

  </section>

  <section class="mb-4 pt-5 wow fadeIn" data-wow-delay="0.3s">

    <div class="comments-list text-center text-md-left mb-5">
      <div class="text-center mb-4">
        <h3 class="font-weight-bold pt-3 mb-5">Comentários <span class="badge pink">3</span></h3>
      </div>
      <div class="row mb-4">
        <div class="col-sm-2 col-12 mb-md-0 mb-3">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (9).jpg" class="avatar rounded-circle z-depth-1-half">
        </div>

        <div class="col-sm-10 col-12">
          <a>
            <h4 class="font-weight-bold">Gabriel Santos</h4>
          </a>
          <div class="mt-2">
            <ul class="list-unstyled">
              <li class="comment-date"><i class="fas fa-clock"></i> 15/09/2022</li>
            </ul>
          </div>
          <p class="grey-text">Conteúdo muito interessante. Espero poder ler mais em breve!</p>
        </div>

      </div>

      <div class="row mb-4">
        <div class="col-sm-2 col-12 mb-md-0 mb-3">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="avatar rounded-circle z-depth-1-half">
        </div>

        <div class="col-sm-10 col-12">
          <a>
            <h4 class="font-weight-bold">Marta Tenreiro</h4>
          </a>
          <div class="mt-2">
            <ul class="list-unstyled">
              <li class="comment-date"><i class="fas fa-clock"></i> 15/09/2022</li>
            </ul>
          </div>
          <p class="grey-text">Assuntos muito interessantes e atualizados. Gostei bastante!</p>
        </div>

      </div>

      <div class="row mb-4">

        <div class="col-sm-2 col-12 mb-md-0 mb-3">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (10).jpg" class="avatar rounded-circle z-depth-1-half">
        </div>
        <div class="col-sm-10 col-12">
          <a>
            <h4 class="font-weight-bold">Anna Maria</h4>
          </a>
          <div class="mt-2">
            <ul class="list-unstyled">
              <li class="comment-date"><i class="fas fa-clock"></i> 15/09/2022</li>
            </ul>
          </div>
          <p class="grey-text">Muito interessantes as postagens do blog, aguardo por novidades!
          </p>
        </div>
      </div>
    </div>

  </section>


  <section class="pb-5 mt-5 wow fadeIn" data-wow-delay="0.3s">

    <div class="reply-form">
      <h3 class="text-center my-5 h3 pt-3">Deixe um comentário </h3>
      <p class="text-center">Usuário Logado</p>

      <div class="row text-center text-md-left">
        <div class="col-sm-2 col-12 mb-md-0 mt-4">
          <img src="https://scontent.fcgh10-1.fna.fbcdn.net/v/t39.30808-6/271445794_4766800823410680_6375628259428892075_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=GbH8K41MuxoAX9LRQc8&tn=XNCNZ9DiKlhZ_cMy&_nc_ht=scontent.fcgh10-1.fna&oh=00_AT-C4a67brlTQS2N-Y39sYZyDrjIOgeFrevrjS-2Fu101w&oe=63290F9B" class="img-fluid rounded-circle z-depth-2" alt="Sample avatar image" class="img-fluid avatar rounded-circle z-depth-2">
        </div>

        <div class="col-sm-10 col-12">
          <div class="md-form">
            <textarea type="text" id="form-mess" class="md-textarea form-control" rows="3"></textarea>
            <label for="form-mess">Sua Mensagem</label>
          </div>

        </div>

        <div class="col-md-12 text-center mt-4">
          <button class="btn btn-pink btn-rounded">Enviar</button>
        </div>

      </div>
    </div>

  </section>

</div>

</main>

<footer class="page-footer pt-0">

<div class="container">

  <div class="row">

    <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

      <div class="text-center d-flex justify-content-center my-4">

        <a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg pr-md-4"> </i></a>
        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg pr-md-4"> </i></a>
        <a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg pr-md-4"> </i></a>
        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg pr-md-4"> </i></a>
        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg pr-md-4"> </i></a>
        <a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg pr-md-4"> </i></a>
      </div>

    </div>

  </div>

</div>

<div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
  <div class="container-fluid">
    © 2022 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Victor Hugo Viana de Alcantara </a>
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
