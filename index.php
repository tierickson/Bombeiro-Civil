<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bombeiro Civil</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicons
            ================================================== -->
        <link rel="shortcut icon" href="vendor2/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="vendor2/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="vendor2/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="vendor2/img/apple-touch-icon-114x114.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="vendor2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="vendor2/fonts/font-awesome/css/font-awesome.css">

        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="estilo_erick/style.css">
        <link rel="stylesheet" type="text/css"  href="vendor2/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendor2/css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" type="text/css" href="vendor2/css/nivo-lightbox/default.css">
        <script type="text/javascript" src="vendor2/js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation
            ==========================================-->
        <nav id="menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container"> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i>  Bombeiro Civil Dianópolis - To</a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#page-top" class="page-scroll">Home</a></li>
                        <li><a href="#about" class="page-scroll">Sobre Nos</a></li>
                        <li><a href="#portfolio" class="page-scroll">Fotos</a></li>
                        <li><a href="#contact" class="page-scroll">Contato</a></li>
                        <!-- <li><a href="ProfessorAluno.php" class="page-scroll cor_de_fundo">Entra</a></li> -->
                        <li>
                            <div class="page-scroll cor_de_fundo" id="configuracao">
                                <h1>Entra</h1>
                                <a  class="inline" id="esquerda" href="login.aluno.php">ALUNO</a>
                                <a class="inline"  id="direita" href="login.professor.php">PROFESSOR</a>
                            </div>
                        </li>
                        <!--        <li><a href="" class="page-scroll cor_de_fundo">inscreva - se</a></li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
        </nav>
        <!-- Header -->
        <header id="header">
            <div class="intro">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>Bombeiro Civil Dianópolis - To</h1>
                            <p>Combate a incedios • Resgate em altura • </p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">Leia Mais</a> 

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section -->
        <div id="about">
            <div class="container">
                <div class="section-title text-center center">
                    <h2>Quem Somos</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6"> <img src="vendor2/img/aboute.jpg" class="img-responsive" alt=""> </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="about-text">
                            <p>Somos a primeira turma de bombeiros civil profissional da cidade de Dianópolis - Tocantins, estamos aptos e preparado para ajuda na prestação de socorro às vítimas em diferentes localidades. </p>
                            <p>O bombeiro civil profissional tem como objetivo o combate ao incêndio, salvamentos aquáticos, salvamento em altura, salvamento terrestre. Buscando sempre o melhor para a vítima e também a sua própria equipe. </p>
                            <a href="#portfolio" class="btn btn btn-danger btn-lg page-scroll">Nossas fotos</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Section -->
        <div id="portfolio">
            <div class="container">
                <div class="section-title text-center center">
                    <h2>Fotos</h2>
                    <hr>
                </div>
                <div class="categories">
                    <ul class="cat">
                        <li>
                            <ol class="type">
                                <li><a href="#" data-filter="*" class="active">Todas</a></li>
                                <li><a href="#" data-filter=".web">turma</a></li>
                                <li><a href="#" data-filter=".execicio">exercícios</a></li>
                                <li><a href="#" data-filter=".fogo">Brincando com Fogo</a></li>
                                <!--        <li><a href="#" data-filter=".product">Product Design</a></li>
                                -->
                            </ol>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="portfolio-items">
                        <div class="col-sm-6 col-md-3 col-lg-3 web">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/1-turma.jpg" title="Turma Bravo Unida" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Turma Bravo Unida</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/1-turma1.jpg" class="img-responsive" alt="Turma Bravo Unida"> </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 web">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/3-turma.jpg" title="Turma Bravo Unida" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Turma Bravo Unida</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/3-turma3.jpg" class="img-responsive" alt="Turma Bravo Unida"> </a> </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3 col-lg-3 web">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/4-turma.jpg" title="Turma Bravo Unida" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Turma Bravo Unida</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/4-turma4.jpg" class="img-responsive" alt="Turma Bravo Unida"> </a> </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3 web">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/5-turma.jpg" title="Turma Bravo Unida" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Turma Bravo Unida</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/5-turma5.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                            </div>
                        </div>
                        <!--          -------------------------------------------------------------------------------------------------------------->
                        <div class="col-sm-6 col-md-3 col-lg-3 execicio ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/excicios/foto (1).jpg" title="Exercícios" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>execicios</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/excicios/foto (1) - Cópia.jpg" class="img-responsive" alt="Exercícios"> </a> </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3 execicio ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/excicios/foto (2).jpg" title="Exercícios" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>exercícios</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/excicios/foto (2) - Cópia.jpg" class="img-responsive" alt="Exercícios"> </a> </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3 execicio ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/excicios/foto (3).jpg" title="Exercícios" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>exercícios</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/excicios/foto (3) - Cópia.jpg" class="img-responsive" alt="Exercícios"> </a> </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3 execicio ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/excicios/foto (4).jpg" title="Exercícios" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>exercícios</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/excicios/foto (4) - Cópia.jpg" class="img-responsive" alt="Exercícios"> </a> </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3 execicio ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/excicios/foto (5).jpg" title="Exercícios" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>exercícios</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/excicios/foto (5) - Cópia.jpg" class="img-responsive" alt="Exercícios"> </a> </div>
                            </div>
                        </div>
                        <!--          -------------------------------------------------------------------------------------------------------------->
                        <div class="col-sm-6 col-md-3 col-lg-3 fogo ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/brincando_com_fogo/foto (1).jpg" title="Bricando com fogo" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Bricando com fogo</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/brincando_com_fogo/foto (1) - Cópia.jpg" class="img-responsive" alt="Bricando com fogo"> </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 fogo ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/brincando_com_fogo/foto (2).jpg" title="Bricando com fogo" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Bricando com fogo</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/brincando_com_fogo/foto (2) - Cópia.jpg" class="img-responsive" alt="Bricando com fogo"> </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 fogo ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/brincando_com_fogo/foto (3).jpg" title="Bricando com fogo" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Bricando com fogo</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/brincando_com_fogo/foto (3) - Cópia.jpg" class="img-responsive" alt="Bricando com fogo"> </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 fogo ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/brincando_com_fogo/foto (4).jpg" title="Bricando com fogo" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Bricando com fogo</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/brincando_com_fogo/foto (4) - Cópia.jpg" class="img-responsive" alt="Bricando com fogo"> </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 fogo ">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="vendor2/img/portfolio/brincando_com_fogo/foto (5).jpg" title="Bricando com fogo" data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Bricando com fogo</h4>
                                        </div>
                                        <img src="vendor2/img/portfolio/brincando_com_fogo/foto (5) - Cópia.jpg" class="img-responsive" alt="Bricando com fogo"> </a> </div>
                            </div>
                        </div>
                        <!--          <div class="col-sm-6 col-md-3 col-lg-3 product">
                                  <div class="portfolio-item">
                                    <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
                                      <div class="hover-text">
                                        <h4>Project Title</h4>
                                      </div>
                                      <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
                                  </div>
                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section -->
        <div id="contact" class="text-center">
            <div class="container">
                <div class="section-title center">
                    <h2>Get In Touch</h2>
                    <hr>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control" placeholder="Nome" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensagem" required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <button type="submit" class="btn btn btn-danger btn-lg">Enviar Mensagem</button>
                    </form>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container text-center">
                <div class="fnav">
                    <p>Copyright &copy; 2018 - Erickson Silva Carvalho</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="vendor2/js/jquery.1.11.1.js"></script> 
        <script type="text/javascript" src="vendor2/js/bootstrap.js"></script> 
        <script type="text/javascript" src="vendor2/js/SmoothScroll.js"></script> 
        <script type="text/javascript" src="vendor2/js/nivo-lightbox.js"></script> 
        <script type="text/javascript" src="vendor2/js/jquery.isotope.js"></script> 
        <script type="text/javascript" src="vendor2/js/jqBootstrapValidation.js"></script> 
        <script type="text/javascript" src="vendor2/js/contact_me.js"></script> 
        <script type="text/javascript" src="vendor2/js/main.js"></script>
    </body>
</html>