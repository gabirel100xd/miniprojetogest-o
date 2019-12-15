<?php
    session_start();        //Resume a sessï¿½o atual
    include("includes/conexao.php"); //Inclui o ficheiro com os processos padr?es de conex?o a base de dados
    include 'funcoes.php';
    header("Content-Type: text/html; charset=ISO-8859-1",true);

    //antes de utilizar o php testar todos as instru??es no sql
   
?>

<html>
    <head>
        <title>Exibição de dados Secção</title>
        <meta charset = 'ISO-8859-1'>
        <link rel="stylesheet" href="includes/styleListar.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">     

    </head>
        <body>
            <nav>  
            <?php show_nav_listarseccao(); ?>
            </nav>
          
        
            <h1 align="center">Secções</h1>

                <?php
                    if(isset( $_SESSION['msg'])){       //Comando que checa se a variavel universal "msg" possui algum valor.
                        echo  $_SESSION['msg'];         //Se a variavel estiver com algum valor, imprimi na tela o mesmo.
                        unset( $_SESSION['msg']);       //limpa a variavel msg para mensagens posteriores
                    }
                ?>
                <p id="error"></p>

            <table class="conteudo_tabela">
            <?php show_listarSeccao(); ?>
            </table>

                          
        </body>
</html>