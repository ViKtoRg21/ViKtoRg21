<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'Includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect , $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>



<div class = "row">
    <div class = "col s12 m6 push-m3">
       <h3 class = "light"> Editar clientes </h3>
       <form action = "php_action/update.php" method = "POST">
           <input type = "hidenn" name = "id" value = "<?php echo $dados ['id'];?>">
           <div class = "input-field col s12">
               <input type="text" name = "nome" id = "nome" value = "<?php echo $dados ['nome'];?>">
               <label for = "nome">Nome</label>
           </div>
           <div class = "input-field col s12">
               <input type="text" name = "sobrenome" value = "<?php echo $dados ['sobrenome'];?>" id = "sobrenome">
               <label for = "sobrenome">Sobrenome</label>
           </div>
           <div class = "input-field col s12">
               <input type="text" value = "<?php echo $dados ['nome'];?>" name = "email" id = "email">
               <label for = "email">Email</label>
           </div>
           <div class = "input-field col s12">
               <input type="text" value = "<?php echo $dados ['nome'];?> " name = "idade" id = "idade">
               <label for = "idade">Idade</label>
           </div>
           <button type="submit" name = "btn-editar" class = "btn">Atualizar</button>
           <a herf ="index.php" class = "btn green">Lista de clientes</a>
        </form>
   </div>
</div>


