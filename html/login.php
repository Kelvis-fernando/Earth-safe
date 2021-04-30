<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <main>
        <aside id="form-side">
            <img id="logo-form-login" src="../img/logo.svg" alt="" width="350">
            <h1 class="h1">Login</h1>

            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div id="erro-login">
                <p>Login ou senha invalidos</p>
                </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <form action="logar.php" method="POST" id="form-login">
                <label for="E-mail">E-mail</label><br>
                <input type="text" name="email" id="E-mail" placeholder="Digite o seu E-mail"><br>

                <label for="Senha">Senha</label><br>
                <input type="password" id="Senha" name="senha" placeholder="Digite a sua senha"><br>

                <button type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta ainda? <a href="../html/cadastro.php" id="link-cadastro">Cadastre-se</a></p>

        </aside>
        <aside>
            <img src="../img/example-scene-3.svg" alt="" width="805">
        </aside>
    </main>
</body>

</html>