<script src="https://kit.fontawesome.com/76b3b4460b.js" crossorigin="anonymous"></script>

<?php
/*=========LISTA DE FUNÇÕES==========*/
/*1)FUNÇÃO QUE MOSTRA NAVEGADOR DA PÁGINA home.php - OK*/
function show_nav_home(){ ?>
    <div class="logo">
                    <h4>Navegador</h4>
                </div>
                <ul class="link_nave">
                    <li><a>Armazém</a>
                        <ul class="sublink_nave">
                            <li><a href="listarseccao.php">Listar</a></li>
                            <li><a href="#">Secção</a></li>
                        </ul>
                    </li>

                    <li><a>Encomendas</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                            <li><a href="#">Fornecedor</a></li>
                        </ul>
                    </li>
                    <li><a>Compras</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                        </ul>
                    </li>
                    <li><a>Produtos</a>
                        <ul class="sublink_nave">
                            <li><a href="catalogo.php">Catálogo</a></li>
                            <li><a href="#">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="formulario_login_div">
                    <?php
                        if(isset($_SESSION['utilizador_ID'])){
                            echo '<form action="includes/logout.inc.php" method="post">
                                <button class="btnlogout" type="submit" name="btnlogout">Logout</button>
                                </form>';
                        
                        }
                        else{
                            echo '<form action="includes/login.inc.php" method="post">
                                  <input class="login_text" type="text" name="email_id" placeholder="Utilizador/E-mail..">
                                  <input class="login_text" type="password" name="senha_id" placeholder="Palavra passe..">
                                  <button class="btnlogin" type="submit" name="login-enviar">Login</button>
                                  </form>
                                  <button class="btnregistrar"><a href="registrar.php">Registrar-se</a></button>';
                        }
                    ?>
                </div>
                <div class="hamburger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
<?php }?>

<?php
/*2)FUNÇAO QUE MOSTRA TABELA CATALOGO DE PRODUTOS - ok*/
function show_product_catalog(){ ?>
    <table>
            <thead>
                <tr>
                    <td>Código de Barras</td>
                    <td>Produto</td>
                    <td>Preço</td>
                    <td>Peso</td>
                    <td>Validade</td>
                </tr>
            </thead>

            <?php
            include("includes/conexao.php");
            $sql = "SELECT * FROM produto";
            $resultado = $ligacao->query($sql) or die($ligacao->error);
            while($linha = $resultado->fetch_array()){ ?>
            <tbody>
                <tr>
                <td><?php  echo $linha['cod_barra'];?></td>
                <td><?php  echo $linha['descricao'];?></td>
                <td><?php  echo $linha['preco_unitario'];?></td>
                <td><?php  echo $linha['peso'];?></td>
                <td><?php  echo $linha['validade'];?></td>
                </tr>
            <?php }?>
            </tbody>

         </table>
<?php }?>

<?php
/*2.1)FUNÇÃO QUE MOSTRA NAVEGADOR DA PÁGINA catalogo - ok*/
function show_nav_catalog(){ ?>
    <a title="Voltar a pagina principal" class="home" href="home.php">
                <i class="fas fa-home"></i>
            </a>
            <a title="cadastrar novo produto" class="home" href="inserircatalogo.php">
                <i class="fas fa-folder-plus"></i>
            </a>

                <div class="logo">
                    <h4>Navegador</h4>
                </div>
                <ul class="link_nave">
                    <li><a>Secção</a>
                        <ul class="sublink_nave">
                            <li><a href="listarSeccao.php">Secções</a></li>
                            <li><a href="#">xxxxxxxxx</a></li>
                        </ul>
                    </li>

                    <li><a>Encomendas</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                            <li><a href="#">Fornecedor</a></li>
                        </ul>
                    </li>
                    <li><a>Compras</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                        </ul>
                    </li>
                    <li><a>Produtos</a>
                        <ul class="sublink_nave">
                            <li><a href="catalogo.php">Catálogo</a></li>
                            <li><a href="#">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
<?php }?>

<?php
/*3)FUNÇÃO QUE MOSTRA NAVEGADOR DA PÁGINA listarArmazem.php -  OK*/
function show_nav_listarseccao() {?>
    <a title="Voltar a pagina principal" class="home" href="home.php">
                <i class="fas fa-home"></i>
            </a>
            <a title="Inserir novo produto" class="home" href="inserirSeccao.php">
                <i class="fas fa-folder-plus"></i>
            </a>

                <div class="logo">
                    <h4>Navegador</h4>
                </div>
                <ul class="link_nave">
                    <li><a>Secção</a>
                        <ul class="sublink_nave">
                            <li><a href="listarSeccao.php">Secções</a></li>
                            <li><a href="#">xxxxxxx</a></li>
                        </ul>
                    </li>

                    <li><a>Encomendas</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                            <li><a href="#">Fornecedor</a></li>
                        </ul>
                    </li>
                    <li><a>Compras</a>
                        <ul class="sublink_nave">
                            <li><a href="#">Listar</a></li>
                        </ul>
                    </li>
                    <li><a>Produtos</a>
                        <ul class="sublink_nave">
                            <li><a href="catalogo.php">Cátalogo</a></li>
                            <li><a href="#">Cadastrar</a></li>
                        </ul>
                    </li>
                </ul>
<?php }?>

<?php
/*3.1) FUNÇAO QUE MOSTRA A LISTA DE SECÇÕES*/
function show_listarSeccao(){ ?>
    <thead>
                    <tr>
                        <td><b>Produto</b></td>
                        <td><b>Secção</b></td>
                        <td><b>Prateleira</b></td>
                        <td><b>Quantidade na Secção</b></td>
                        <td><b>Quantidade Total</b></td>
                        <td><b>Data armazenado</b></td>
                        <td><b>Ações</b></td>
                        
                    </tr>
                </thead> 

            <tbody>
                    
                <tr>

                <?php
                include("includes/conexao.php");
                $sql ="SELECT cod_barra, descricao,tipo, quantidade_seccao, quantidade_total, prateleira, data_deslocacao
                FROM produto
                INNER JOIN deslocacao
                on deslocacao.produto_fk = produto.cod_barra
                INNER JOIN seccao
                on deslocacao.seccao_fk = seccao.ID_seccao";            //comando em SQL utilizado para listagem das colunas
                $resultado = $ligacao->query($sql) or die($ligacao->error); // coloca na variavel "resultado" a query da variavel liga??o
                 while($linha = $resultado->fetch_array()){ $id = $linha['cod_barra']; /*? atribuido a variavel linha o valor da ligacao ao query*/?>     
                    
                    <td><?php echo $linha["descricao"];?></td>  <!--Imprime o valor de linha na tabela--> 
                    <td><?php echo $linha["tipo"];?></td>
                    <td><?php echo $linha["prateleira"];?></td>
                    <td><?php echo $linha["quantidade_seccao"];?></td>
                    <td><?php echo $linha["quantidade_total"];?></td>
                    <td><?php echo date("d/m/Y h:i:s A", strtotime($linha["data_deslocacao"]));?></td>
                    <td>        
                        <!--Coluna "A??o" ? preenchida por duas imagens (presente na pasta ex_9) atribuidas com um link que as leva para outros ficheiros para processar a devida fun??o.
                        Evidenciando que cada link passa o valor de "numaluno" para servir como id da coluna que vai ser editada ou apagada-->
                        <a title = "Editar produto" href="editarArmazem.php?id_editar=<?php echo $id; ?>" class="acoes"><i  class="far fa-edit"  ></i></a>
                        
                        <a title = "Apagar produto" onclick= "conf_apag(<?php echo $id; ?>)" class="acoes">
                        <i  class="far fa-trash-alt"></i>
                        </a>
                        <a title = "Deslocar produto" onclick= "desloca_sec(<?php echo $id; ?>)" class="acoes">
                        <i class="fas fa-dolly"></i>
                        </a>
    
                    </td>


                </tr> 
            
                <?php } ?>
            </tbody>
<?php } ?>

<?php
/*4)FUNÇÃO QUE MOSTRA INPUTS PARA REGISTRO DE NOVO UTILIZADOR NO LOGIN DATABASE - OK*/
function show_register_inputs() {?>
    <main>
            <div class="wrapper-main">
                <section class="section-default">
                    <h1>Registrar</h1>
                    <form class="formulario_registrar" action="includes/registrar.inc.php" method="post">
                        <input type="text" name="utilizador_id" placeholder="Utilizador">
                        <input type="text" name="email_utilizador_id" placeholder="exemplo@mail.com">
                        <input type="password" name="palavrapasse_utilizador_id" placeholder="Palavra passe">
                        <input type="password" name="palavrapasse_utilizador_id-repetir" placeholder="Repita a Palavra passe">
                        <button type="submit" name="registrar_enviar">Registrar</button>
                    </form>
                </section>
            </div>
        </main>
<?php }?>


<?php
/*5)FUNÇÃO QUE DESLOCA PRODUTO ENTRE SECÇÕES*/
function deslocar_produto(){ ?>
    <?php
    session_start();                //Resume a sess?o atual
    include_once("includes/conexao.php");    //Inclui o ficheiro com os processos padr?es de conex?o a base de dados
 
    $id = $_GET['id_desloc'];        //Armazena a variavel "id_apagar" Enviada pelo link de apagar do ficheiro "ex_9" na variavel $id_apagar
    $seccao = $_GET['id_seccao'];

        if(!empty($id)){                                                          //se o id_apagar n?o foi atribuido, ent?o o codigo termina e imp?e o requisito de selecionar um aluno
            $sql = "UPDATE  deslocacao  SET seccao_fk = '$seccao' WHERE produto_fk= '$id'";                    //Comando em SQL que deleta a coluna que condiz com o id "id_apagar". 
            $resultado = mysqli_query($ligacao,$sql) or die($ligacao->error);          //Coloca na variavel "resultado" a query da variavel liga??o      
 
                if(mysqli_affected_rows($ligacao)){             //Condi??o que verifica se a linha foi alterada
                    $_SESSION['msg'] = "<p style='color:green;'>Produto deslocado com sucesso. <?php echo $seccao ?></p>";        //Se foi alterada o sistema retorna uma mensagem de sucesso
                    header("Location: listarSeccao.php");          
                    $resultado = mysqli_query($ligacao,$sql) or die($ligacao->error);
 
                }else{
                    $_SESSION['msg'] = "<p style='color:red;'>Produto não foi deslocado com sucesso</p>";  //Se n?o foi alterada o sistema retorna uma mensagem de fracasso
                    header("Location: listarSeccao.php");
                }   
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Necessario selecionar um produto</p>";      //id_apagar n?o foi atribuido
            header("Location: listarSeccao.php");
}
?>
<?php } ?>

<?php
/*6)FUNÇÃO QUE APAGAR PRODUTO DE UMA SECÇÃO*/
function apagar_produto(){
    
    session_start();                //Resume a sess?o atual
    include_once("includes/conexao.php");    //Inclui o ficheiro com os processos padr?es de conex?o a base de dados
 
    $id = $_GET['id_apagar'];        //Armazena a variavel "id_apagar" Enviada pelo link de apagar do ficheiro "ex_9" na variavel $id_apagar
 
        if(!empty($id)){                                                          //se o id_apagar n?o foi atribuido, ent?o o codigo termina e imp?e o requisito de selecionar um aluno
            $sql = "DELETE FROM deslocacao WHERE produto_fk ='$id'";                    //Comando em SQL que deleta a coluna que condiz com o id "id_apagar". 
            $resultado = mysqli_query($ligacao,$sql) or die($ligacao->error);          //Coloca na variavel "resultado" a query da variavel liga??o      
 
                if(mysqli_affected_rows($ligacao)){             //Condi??o que verifica se a linha foi alterada
                    $_SESSION['msg'] = "<p style='color:green;'>Produto apagado com sucesso</p>";        //Se foi alterada o sistema retorna uma mensagem de sucesso
                    header("Location: listarSeccao.php");          
                    $resultado = mysqli_query($ligacao,$sql) or die($ligacao->error);
 
                }else{
                    $_SESSION['msg'] = "<p style='color:red;'>Produto não foi apagado com sucesso</p>";  //Se n?o foi alterada o sistema retorna uma mensagem de fracasso
                    header("Location: listarSeccao.php");
                }   
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Necessario selecionar um produto</p>";      //id_apagar n?o foi atribuido
            header("Location: listarSeccao.php");
}
} ?>





<?php
/*=========LISTA DE FUNÇÕES JAVASCRIPT========*/?>
<script>
    function desloca_sec(id){
        var seccao
        
            seccao = prompt ("Deslocar para qual secção?");
        
        
        if(seccao){
            window.location.href= 'deslocProduto.php?id_desloc='+id+'&id_seccao='+seccao+'';
        }else{
                alert ("Deslocamento cancelado");
        }
        
    }

    function conf_apag(id)
        {
            var r=confirm("Tem certeza que deseja apagar esses dados?");        //cria um "alert" com duas op??es confirmar ou cancelar
            if (r==true)
            {
                window.location.href= 'apagarProduto.php?id_apagar='+id+''; //caso o utilizador confirme, redireciona para a fun??o de apagar a linha selecionada com o id especifico
            }
                else
                {   
                    ans = "<p style='color:red;'>Apagamento Cancelado</p>";  //caso o utilizador cancele, retorna uma mensagem explicando o fracasso e atribui na variavel ans
                }
    document.getElementById("error").innerHTML=ans      //atribui na mensagem de error(linha 47) a resposta do cancelamento
        }
</script>




<?php
/*=============LISTA DE QUERYS=============*/
/*QUERY QUE SELECIONA  TODOS PRODUTOS*/
function query_select_catalog(){
            include("includes/conexao.php");
            $sql = "SELECT * FROM produto";
            $resultado = $ligacao->query($sql) or die($ligacao->error);

            return $resultado;
}?>


