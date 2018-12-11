<?php
session_start();
if (isset($_SESSION['professor'])):

?>
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

<!--        <script type="text/javascript" src="vendor2/js/modernizr.custom.js"></script>-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >
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
            <div id="panel" >
                <div id="minmenu">
                    <?php
                    echo "<a href='index.professor.php?page=alfa' class='btn btn-danger asfasta_direita'>Volta para Turma <strong>ALFA</strong></a>";
                    echo "<a href='index.professor.php?page=bravo' class='btn btn-danger'>Volta para Turma <strong>BRAVO</strong></a>";
                    ?>
                </div>
                <div class="container">
                    <div class="card card-login mx-auto mt-5">

                        <div class="card-body">
                            <form action="action/aluno.store.php" method="post" >
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" id="inputNome" name="nome" class="form-control" placeholder="Fulano de Tal" required autofocus>                                        
                                    </div>
                                </div>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="Sobrenome">sobrenome</label>
                                        <input type="text" id="Sobrenome" name="sobrenome" class="form-control" placeholder="Da Silva" required >
                                    </div>
                                </div>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="cpf">CPF</label>
                                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Ex: 12345678910" required >
                                    </div>
                                </div>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="usuario">Nome de usuario</label>
                                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="eri" required >
                                    </div>
                                </div>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="tipo_sanguineo">Tipo Sanguineo</label>
                                        <input type="text" id="tipo_sanguineo" name="tipo_sanguineo" class="form-control" placeholder="Ex: A-" required >
                                    </div>
                                </div>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="nome_gerra">Nome de Gerra</label>
                                        <input type="text" id="nome_gerra" name="nome_gerra" class="form-control" placeholder="Ex: Carvalho" required >
                                    </div>
                                </div>

                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="nome_turma">Turma&nbsp;&nbsp;</label>
                                        <select name="nome_turma" class="custom-select  core">
                                            <option selected>Selecione uma Turma</option>
                                            <option value="ALFA">ALFA</option>
                                            <option value="BRAVO">BRAVO</option>
                                        </select>
                                    </div>
                                </div>

                                <!------------------------------------------------------------------------------------>
                                <div class="form-group favb">
                                    <div class="form-label-group">
                                        <label for="inputEmail">Endereço de e-mail</label>
                                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ex.: fulano@email.com" required>                                      
                                    </div>
                                </div>
                                <div class="form-group fa2">
                                    <div class="form-label-group">
                                        <label for="inputPassword">Senha</label>
                                        <input type="password" id="inputPassword" name="senha" class="form-control" required="required">                                       
                                        <?php
                                        if (isset($_GET['erro'])) {
                                            echo '<p style="color:tomato">Usuário ou senha inválidos.</p>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block fa3" value="Cadastrar">
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
        <script type="text/javascript" src="vendor2/js/contact_me.js"></script> 
        <script type="text/javascript" src="vendor2/sjs/main.js"></script>-->

    </body>
</html>

<?php
endif;
header('location: ../projetoFinal/login.professor.php');
?>
