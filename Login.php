<?php declare(strict_types=1) ?>
<?php

if (count($_POST)>0){


$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');


try {
    
        include("ConexaoBd.php");
   
  $stmt = $conn->prepare('SELECT codigo FROM restaurante_bd.usuario WHERE email=:email AND senha=:senha ');
  $stmt ->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt ->bindParam(':senha', $senha, PDO::PARAM_STR);
  
  $stmt->execute();

  $result = $stmt->fetchAll();
  $qtd_users = count($result);
  
  if($qtd_users == 1)
  
  {
      include ('Pedido.php');
  }
  
  else if ($qtd_users == 0)
  {
     
      $resultado['msg'] = "USUÁRIO E/OU SENHA INVÁLIDOS!";
      $resultado['cod'] = 0; 
     
  }
  
  } 

catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

$conn=null;

}

include ("index.php");
?>





