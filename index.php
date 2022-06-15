<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <head>
        <meta charset="UTF-8">
        <title> Restaurante - Registro de pedidos</title>
    </head>
    <body style="background-color:#F9986A" >
        <font face="Helvetica">  
        <div class="coitainer" ALIGN="center" >
            <h2><br> <br><br><b>Efetue Login</b> </h2></br>
        <form  id = "formLogin" action= "Login.php" method="POST" >

            <input type= "email" id= "email" name="email" placeholder ="Digite seu Email" /><br><br>
            <input type = "password" id= "senha" name="senha" placeholder="Digite sua Senha"/><br><br>
            <input type= "submit" id="Submeter" class="btn btn-primary" value="Entrar" />
            <br><br>
            
            <a href="CadastrarUser.php">
            <input type= "button" id="Cadastrar" class="btn btn-primary" name="Cadastrar" value="Cadastrar" />
            </a>
            
                <?php 
            if (isset($resultado) && $resultado['cod']== 0 ): ?>
            
                <div class ="alert alert-danger">
                
                    <?php echo $resultado['msg']; ?> 
                    
               </div>
           <?php endif; ?>
            
        </form>
</div>
       
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
