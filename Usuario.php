<?php

if(!empty(array_filter($_POST))) 

{ 
    
    $NomeU = filter_input(INPUT_POST, 'NomeU');
    $emailU = filter_input(INPUT_POST, 'emailU');
    $senhaU = filter_input(INPUT_POST, 'senhaU');

    
    try {

       include("ConexaoBd.php");

        $sql = 'insert into restaurante_bd.usuario 
          (codigo, nome, email, senha)
          VALUES (?,?,?,?)';

        $stmt = $conn->prepare($sql);
        $stmt->execute([null, $NomeU, $emailU, $senhaU]);

        $resultado["msg"] = 'Usuario Cadastrado';
        $resultado["cod"] = 1;
        $resultado["style"] = "alert-success";
   
    }
    catch (PDOException $e) 
    {
           echo $e->getMessage();
    }
    $conn = null;

include("CadastrarUser.php");
    
}        


else 
 
{
        $resultado["msg"] = 'Preencha todos os campos';
        $resultado["cod"] = 0;
        $resultado["style"] = "alert-danger";
    
}






?>


