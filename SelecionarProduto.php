<?php

try{

    include ("ConexaoBd.php");

 $consulta = $conn->prepare('SELECT * FROM restaurante_bd.pedido');

 $consulta->execute();

 $r["pedido"] = $stmt->fetchAll();
 
}

catch (PDOException $e) 

{

    $conn=null;

echo $e->getMessage();
}


include("Produto.php");
?>