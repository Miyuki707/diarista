<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style1.css">

        <title>Login</title>

    </head>

    <body>

        <div id="login">

            <form class="card">

                <div class="card-header">

                    <h2>Login</h2>

                </div>

                <div class="card-content">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>

                        <input type="text" id="usuario" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>

                        <input type="password" id="password" autocomplete="off">

                    </div>

                </div>

                <div class="card-footer">

                    <input type="submit" value="login" class="submit">

                    <a href="cadastro.php" class="recuperar_senha">Não é cadastrado? Cadastre -se!</a>

                </div>

            </form>

        </div>

    </body>

</html>