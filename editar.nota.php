<?php
session_start();
if (isset($_SESSION['professor'])):


require_once ('class/AlunoDAO.php');
require_once ('class/aluno.php');
require_once ('class/turma.php');
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
            <div id="panel" >
                 <div id="minmenu">
                    <?php
                    echo "<a href='index.professor.php?page=alfa' class='btn btn-danger asfasta_direita'>Volta para Turma <strong>ALFA</strong></a>";
                    echo "<a href='index.professor.php?page=bravo' class='btn btn-danger'>Volta para Turma <strong>BRAVO</strong></a>";
                    ?>
                </div>
                <div id="conteudo">
                    <div class="row">
                        <?php
                        $idaluno = (int) $_GET['idaluno'];
                        $alunodao = new alunoDAO();
                        $aluno = $alunodao->find($idaluno);
                        ?>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div >
                                        <ul class="list-group diminuir_ul">
                                            <li class="list-group-item">E-mail: <strong class="estilo"><?= $aluno->email ?></strong></li>
                                            <li class="list-group-item">Nome Do Aluno: <strong class="estilo"> <?= $aluno->nome . " " . $aluno->sobrenome ?></strong></li>
                                            <li class="list-group-item">Nome de Gerra:  <strong class="estilo"><?= $aluno->nome_gerra ?></strong></li>
                                            <li class="list-group-item">CPF: <strong class="estilo"><?= $aluno->cpf ?></strong></li>
                                            <li class="list-group-item">Tipo Sanguíneo:  <strong class="estilo"><?= $aluno->tipo_sanguineo ?></strong></li>                       
                                            <li class="list-group-item">Nome da Turma: <strong class="estilo"><?= $aluno->nome_turma ?></strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wesd">
                            <h1>Altera Nota</h1>
                            <form action="action/aluno.update.php" method="post">
                                <input type="hidden" name="idaluno" value="<?= $idaluno ?>">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" id="materia_1" name="materia_1" placeholder="Insira aqui, a nota da materia 1">      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="materia_2" name="materia_2" placeholder="Insira aqui, a nota da materia 2">      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="materia_3" name="materia_3" placeholder="Insira aqui, a nota da materia 3">      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="materia_4" name="materia_4" placeholder="Insira aqui, a nota da materia 4">      
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="materia_5" name="materia_5" placeholder="Insira aqui, a nota da materia 5">      
                                </div>
                                <button type="submit" class="btn btn-primary">ALTERA</button>
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
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 

<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
<?php
endif;
header('location: ../projetoFinal/login.professor.php');
?>