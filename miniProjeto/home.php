<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    include 'funcoes.php';
    session_start();
?>

<html>
    <head>
        <title>HomePage Hipermercado</title>
        <meta charset = 'ISO-8859-1'>
        <link rel="stylesheet" href="includes/style.css">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    </head>
        <body>
            
            <nav>
            <?php show_nav_home(); ?>      
            </nav>

            <script src="app.js">
            
            </script>
            
        </body>
</html>
