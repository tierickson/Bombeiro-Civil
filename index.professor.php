<?php
session_start();
if (isset($_SESSION['professor'])):


    require_once ('class/AlunoDAO.php');
    require_once ('class/Aluno.php');
    require_once ('class/turma.php');
    require_once ('class/disciplinaDAO.php');
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
                        <a class="navbar-brand page-scroll" href="index.php"><i class="fa fa-play fa-rotate-270"></i>  Bombeiro Civil Dianópolis - To</a> 
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="page-scroll cor_de_fundo2">Home</a></li>
                            <li><a href="action/professor.sair.php" class="page-scroll cor_de_fundo2">SAIR</a></li>
                            <!--        <li><a href="" class="page-scroll cor_de_fundo">inscreva - se</a></li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
            <div id="paginaL" >
                <div id="panel" >
                    <div id="conteudo">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        $nome_turma;
                                        echo "<a href='?page=alfa' class='btn btn-danger asfasta_direita'>Turma <strong>ALFA</strong></a>";
                                        echo "<a href='?page=bravo' class='btn btn-danger'>Turma <strong>BRAVO</strong></a>";
                                        ?>
                                        <a href="cadastro.php" class="btn btn-primary">Cadastra Aluno</a>  
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <br>
                        <div class="row my-5">
                            <div class="col-lg-12 text-center">
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <?php
                                        if (isset($_GET['page'])):
                                            ?>
                                            <?php
                                            $disciplinadao = new disciplinaDAO();
                                            $disiplinas = $disciplinadao->mostraDisciplina();
                                            foreach ($disiplinas as $disiplina):
                                                ?>

                                                <tr>
                                                    <th scope="col" class="centraliza_texto">Nome</th>
                                                    <th scope="col" class="centraliza_texto">Gerra</th>
                                                    <th scope="col" class="centraliza_texto">CPF</th>
                                                    <th scope="col" class="centraliza_texto">Turma</th>
                                                    <th scope="col" class="centraliza_texto mudafot"><?= $disiplina->combate_ince ?></th>
                                                    <th scope="col" class="centraliza_texto mudafot"><?= $disiplina->Resgate_alt ?></th>
                                                    <th scope="col" class="centraliza_texto mudafot"><?= $disiplina->nos_amara ?></th>
                                                    <th scope="col" class="centraliza_texto mudafot"><?= $disiplina->aph ?></th>
                                                    <th scope="col" class="centraliza_texto mudafot"><?= $disiplina->Legislacao ?></th>
                                                    <th scope="col" class="centraliza_texto">EDITAR NOTA</th>
                                                    <th scope="col" class="centraliza_texto">APAGA ALUNO</th>
                                                </tr>
                                            <?php endforeach; ?>
                                        </thead>
                                        <?php
                                        if ($_GET['page'] == 'alfa') {
                                            $nome_turma = 'alfa';
                                        }
                                        if ($_GET['page'] == 'bravo') {
                                            $nome_turma = 'bravo';
                                        }

                                        if (isset($_GET['page']) == $nome_turma) {
                                            $alunodao = new AlunoDAO();
                                            $alunos = $alunodao->mostraTurma($nome_turma);
                                            foreach ($alunos as $aluno):
                                                ?>           
                                                <tbody class="table_background" >
                                                    <tr>
                                                        <th scope="row" class="centraliza_texto"><?= $aluno->nome ?></th>
                                                        <td class="centraliza_texto"><?= $aluno->nome_gerra ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->cpf ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->nome_turma ?></td>
                                                        <td class="centraliza_texto"v><?= $aluno->materia_1 ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->materia_2 ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->materia_3 ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->materia_4 ?></td>
                                                        <td class="centraliza_texto"><?= $aluno->materia_5 ?></td>
                                                        <td class="centraliza_texto">
                                                            <a href="editar.nota.php?idaluno=<?= $aluno->idaluno ?>" class="btn_me btn btn-primary font-weight-bold white-text">EDITAR</a>
                                                        </td>
                                                        <td>
                                                            <a href="action/aluno.disable.php?idaluno=<?= $aluno->idaluno ?>" class=" btn_me btn btn-danger font-weight-bold white-text">APAGAR</a>  
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            }
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
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