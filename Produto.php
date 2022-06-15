<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- comment -->
        <title>Produto</title><!-- comment -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>           
    
    <body style="background-color:#F9986A">
        <div class="container">
            <form action="CadastrarProduto.php" method="post">
                                <h2>
                     <br>
                     <b>Cadastro de Produtos</b>
                 </h2>
                 <br><!-- comment -->
                 <div class="form-group">
                 <label for="nomeProduto"><b><br>Nome Do Produto:</b></label>
                 <input type="text" required class="form-Control" id="nomeProduto" name="nomeProduto" placeholder="Digite a Nome do Produto">
                 </div>
                 <div class="form-group">
                     <label for="Categoria"><b>Categoria:</b></label>
                 <input type="text"required  class="form-Control" id="Categoria" name="Categoria" placeholder="Digite a Categoria">
                 </div>
                 <div class="form-group">
                     <label for="Valor"><b>Valor:</b></label>
                 <input type="number" required step=".01" class="form-Control" id="Valor" name="Valor" placeholder="Digite o Valor" >
                 </div>
                 <div class="form-group">
                     <label for="Foto"><b>Foto:</b></label>
                 <input type="file" class="form-Control" id="Foto" name="Foto" >
                 </div>
                 <div class="form-group">
                     <br>
                     <label for="Info"><b>Informação Adicional:</b></label>
                 <br>
                 <textarea  class="form-Control" id="Info" name="Info" rows="4" cols="50"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary"> Adicionar Produto</button>
                 <br><br>
                 
         <?php if (isset($resultado)): ?>
                 <div class="alert <?= $resultado["style"] ?>">
                     <?php echo $resultado['msg']; ?>
                 </div>
                 <?php endif; ?>
             </div>
                 
            </form>
            <?php include("SelecionarProduto.php"); ?>
            <table class="table">
              <tr>
                 <th>Cod.</th>
                 <th>Nome</th>
                 <th>Categoria</th>
                 <th>Valor</th>
                 <th>Foto</th>
                 <th>Data/Hora</th>
              </tr>
              

              <?php foreach($r["pedido"] as $p): ?>
              <tr>
                 <th><?php $p["codUsuario"]; ?></th>
                 <th><?php $p["foto"]; ?></th>
                 <th><?php $p["nome"]; ?></th>
                 <th><?php $p["obs"]; ?></th>
                 <th><?php $p["valor"]; ?></th>
                 <th><?php $p["dataHora"]; ?></th>
              </tr>
              <?php endforeach; ?>

            </table>
        </div>
        
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    

    
</html>
