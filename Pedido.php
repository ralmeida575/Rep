<?php

?>

<html>
    <head> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>
                    Tela De Cadastro
        </title>
    </head>
 <body style="background-color:#F9986A">
     
     <div class="container">
         
         <form action="CadastrarPedido.php" method="POST">
             <div class="form-group">
                 
                 <h2>
                     <br>
                  Escolha de Pedidos
                 </h2>
                 <br><!-- comment -->
                 <label for="nomeProduto"><b><br>Nome Do Produto:</b></label>
                 <input type="text" class="form-Control" id="nomeProduto" name="nomeProduto" >
                 
              </div>
             <div class="form-group">
                 <label for="qtdProduto"><b>Quantidade:</b></label>
                 <input type="number" class="form-Control" id="qtdProduto" name="qtdProduto" >
                 
              </div>
             <div class="form-group">
                 <label for="obsProduto"><b>Observação:</b></label>
                 <input type="text" class="form-Control" id="obsProduto" name="obsProduto" >
                 
              </div>
             <div class="form-group">
                 <label for="precoUnitario"><b>Preço Unitário:</b></label>
                 <input type="text" class="form-Control" id="precoUnitario" name="precoUnitario" >
                 <br>
                 <button type="submit" class="btn btn-primary"> Adicionar Pedido</button>
                 </br>
                 <br><br>
         <?php if (isset($resultado)): ?>
                 <?php if ($resultado["cod"] == 1 ): ?>
             
             <div class="alert alert-success">
                 <?php echo $resultado["msg"]; ?>
             </div>
                  <?php endif; ?>
             
             <?php if ($resultado["cod"] == 0): ?>
             <div class="alert alert-danger">
                 <?php echo $resultado["msg"]; ?>
             </div>
             <?php endif; ?>
             
                 <?php endif; ?>
         
         </form>
         
     </div>
       
     </div>
 </body>
       
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</html>
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

