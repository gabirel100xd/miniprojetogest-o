<?php
    session_start();
    require "home.php"
?>


        <main>
            <div class="wrapper-main">
                <section class="section-default">
                    <?php
                        if(isset($_SESSION['ID_username'])){
                            echo '<p class="login-status">Você esta logado!</p>';

                        }
                        else{
                            echo '<p class="login-status">Você esta deslogado!</p>';
                        }
                    ?>
                    
                    <p class="login-status">Você esta logado!</p>
                </section>
            </div>
        </main>