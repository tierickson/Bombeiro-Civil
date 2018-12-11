<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                
                <div class="card-body">
                    <form action="action/professor.store.php" method="post">
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="text" id="inputNome" name="nome" class="form-control" placeholder="Fulano de Tal" required >
                                <label for="inputNome">Nome completo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ex.: fulano@email.com" required>
                                <label for="inputEmail">Endereço de e-mail</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="senha" class="form-control" required="required">
                                <label for="inputPassword">Senha</label>
                                <?php
                                if (isset($_GET['erro'])) {
                                    echo '<p style="color:tomato">Usuário ou senha inválidos.</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
        <script src="vendor/axios/axios.js"></script>
        <script src="assets/js/email.js"></script>
    </body>
</html>
