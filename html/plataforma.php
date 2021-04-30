<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma</title>
</head>

<body>
    
    <h1> <a href="logout.php">Sair</a> 
        <?php
            include('verifica_login.php');
            print_r($_SESSION);exit;
        ?>

    </h1>
</body>

</html>