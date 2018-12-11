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
                    <a class="navbar-brand page-scroll" href="index.php"><i class="fa fa-play fa-rotate-270"></i>  Bombeiro Civil Dianópolis - To</a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="page-scroll cor_de_fundo2">Home</a></li>
                        <!--        <li><a href="" class="page-scroll cor_de_fundo">inscreva - se</a></li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
        </nav>

        <div id="paginaL">
            <div >
                <div class="container">
                    <div class="card card-login mx-auto mt-5">
                        <div class="card-body">
                            <br><br><br><br>
                            <h1>Login do Aluno</h1>
                            <form action="action/aluno.login.php" method="post">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" name="email" class="form-control" required>
                                        <label for="inputEmail">Endereço de e-mail</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="senha" class="form-control" required="required">
                                        <label for="inputPassword">Senha</label>
                                        <?php
                                        if (isset($_GET['erro'])) {
                                            echo '<br><p style="color:tomato">Usuário ou senha inválidos.</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </form>
                        </div>
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
          <script src="vendor2/axios/axios.js"></script>
        <script src="assets/js/email.js"></script>
<!--        <script type="text/javascript" src="vendor2/js/jquery.1.11.1.js"></script> 
        <script type="text/javascript" src="vendor2/js/bootstrap.js"></script> 
        <script type="text/javascript" src="vendor2/js/SmoothScroll.js"></script> 
        <script type="text/javascript" src="vendor2/js/nivo-lightbox.js"></script> 
        <script type="text/javascript" src="vendor2/js/jquery.isotope.js"></script> 
        <script type="text/javascript" src="vendor2/js/jqBootstrapValidation.js"></script> 
        <script type="text/javascript" src="vendor2/js/contact_me.js"></script> 
        <script type="text/javascript" src="vendor2/sjs/main.js"></script>-->
    </body>
</html>

