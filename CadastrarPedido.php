<?php

if(empty(array_filter($_POST))) 

{ 
    $resultado["msg"] = 'ITEM NÃO INSERIDO';
        $resultado["cod"] = 0;
        $resultado["style"] = "alert-danger";
        
}        

else 

{
    $nome = filter_input(INPUT_POST, 'nomeProduto');
    $qtdProduto = filter_input(INPUT_POST, 'qtdProduto');
    $obsProduto = filter_input(INPUT_POST, 'obsProduto');
    $precoProduto = filter_input(INPUT_POST, 'precoUnitario');

    try {

       include("ConexaoBd.php");

        $sql = 'insert into restaurante_bd.pedido 
          (codUsuario, nome, obs, preco, qtd)
          VALUES (?,?,?,?,?)';

        $stmt = $conn->prepare($sql);
        $stmt->execute([null, $nome, $obsProduto, $precoProduto, $qtdProduto]);

        $resultado["msg"] = 'Item Inserido';
        $resultado["cod"] = 1;
        $resultado["style"] = "alert-success";
   
    }
    
    catch (PDOException $e) 
    
    {

      $resultado["msg"] = 'erro de bd';
        $resultado["cod"] = 0;
        $resultado["style"] = "alert-danger";
    }
    print_r($produtos);
    $conn = null;
} 

include("Pedido.php");


?>