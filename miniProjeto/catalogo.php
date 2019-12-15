<!DOCTYPE html>
<?php 
session_start();    
include("includes/conexao.php");
include 'funcoes.php';
header("Content-Type: text/html; charset=ISO-8859-1",true);

?>

<html>

    <head>
    <title>Cátalogo Hipermercado</title>
        <meta charset = 'ISO-8859-1'>
        <link rel="stylesheet" href="includes/style.css">
    </head>

    <body>
        <nav>
        <?php show_nav_catalog(); ?>
        </nav>

        <?php show_product_catalog(); ?>
    </body>

</html>


