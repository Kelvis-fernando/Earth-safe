<?php
    include('verifica_login.php');
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-plataforma.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Plataforma - Home</title>
</head>

<body>
    <header>
        <aside id="side-bar">
            <img src="../img/logo.svg" alt="Logo" width="200">
            <ul>
                <li>
                    <a href="" class="link-side-bar">Home</a>
                </li>
                <li>
                    <a href="" class="link-side-bar">Plataforma</a>
                </li>
                <li>
                    <a href="" class="link-side-bar">Crm</a>
                </li>
                <li>
                    <a href="" class="link-side-bar">Clientes</a>
                </li>
            </ul>
        </aside>

        <nav id="navigation-plat">
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="clear"></div>
    <main id="content-home">
        <h2>Seja bem vindo <?php print_r($_SESSION);?></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto magni officia porro ab earum ipsam commodi repellendus laborum fuga, beatae eum exercitationem aliquid excepturi soluta ullam ipsa temporibus consequatur quis.</p>
    </main>

</body>

</html>