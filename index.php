<!DOCTYPE html>
<html style = "background: rgb(229 230 108 / 30%)!important;"lang="en">
<head>
    
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "css/estilos.css" >
    <title>MENU</title>
 
</head>
<body>
    <h1 class="titulos">Ve nuestros platillos</h1>
    <ul id = "menu">

<?php
    require('php/querys.php');

    $Q = new Querys();

    echo $Q -> MenuPartes();
    ?>

    </ul>
    
    <script type = "text/javascript" src="js/servicios.js"></script>
</body>
</html