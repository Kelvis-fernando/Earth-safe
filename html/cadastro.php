<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <aside id="form-side">
            <img id="logo-form-login" src="../img/logo.svg" alt="" width="200">
            <h3 class="h1">Cadastro</h3>

            <form action="" id="form-login">
                <label for="nome">Nome</label><br>
                <input type="text" name="" id="nome" placeholder="Digite o seu nome"><br>

                <label for="email">E-mail</label><br>
                <input type="text" name="" id="email" placeholder="Digite o seu E-mail"><br>

                <label for="senha">Senha</label><br>
                <input type="password" id="senha" placeholder="Digite a sua senha"><br>

                <label for="select">Sexo</label><br>
                <select name="" id="select"><br>
                    <option value="">Selecione o Sexo</option>
                    <option value="">Masculino</option>
                    <option value="">Feminino</option>
                    <option value="">Outros</option>
                </select><br>
                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="../html/login.php" id="link-cadastro">Faça o login</a></p>
        </aside>
        <aside>
            <img src="../img/example-scene-3.svg" alt="" width="805">
        </aside>
    </main>
</body>

</html>