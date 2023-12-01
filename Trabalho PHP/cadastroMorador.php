<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastroCondo.css">

</head>
<body>
    <div id="login">

        <form class="card">

            <div class="card-header">

                <h2>Cadastro Usuário</h2>

            </div>


            <div class="card-content">

                <div>
                    <form method="post" action="#">
                        <select name="usuario">
                        <option value="sin">Síndico</option>
                        <option value="Mor">Morador</option>
                        </select>
                </div>

                <div class="card-content-area">

                    <label for="usuario">Nome de Usuário:</label>

                    <input type="text" id="usuario" autocomplete="off">

                </div>
                <div class="card-content-area">

                    <label for="password">Senha:</label>

                    <input type="password" id="password" autocomplete="off">

                </div>
                <div class="card-content-area">

                    <label for="password">Confirmar Senha:</label>

                    <input type="password" id="password" autocomplete="off">

                </div>

                <div class="card-content-area">

                    <label for="password">Numero de telefone:</label>

                    <input type="password" id="password" autocomplete="off">

                </div>

                <div class="card-content-area">

                    <label for="password">Numero da Residência:</label>

                    <input type="password" id="password" autocomplete="off">

                </div>
                <div class="card-content-area">

                    <label for="password">CPF:</label>

                    <input type="password" id="password" autocomplete="off">

                </div>

            </div>

            <div class="card-footer">

                <a href="login.php" class="submit" vaule="login">Cadastrar Usuário</a>

            </div>

        </form>

    </div>
</body>
</html>