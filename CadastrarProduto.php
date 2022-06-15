<?php

$nome = $_POST["nomeProduto"];
$categoria=$_POST["Categoria"];
$valor =$_POST["Valor"];
$foto=$_POST["Foto"];
$obs=$_POST["Info"];



try {

    include("ConexaoBd.php");

     $sql = 'insert into restaurante_bd.pedido 
       (nome, categoria, valor, foto, obs, codUsuario)
       VALUES (?,?,?,?,?,?)';


     $resultado["msg"] = 'Item Inserido';
     $resultado["cod"] = 1;
     $resultado["style"] = "alert-success";

 }
 
 catch (PDOException $e) 
 
 {

    echo $e->getMessage();
 }

 try{

    $stmt = $conn->prepare($sql);
     $stmt->execute([ $nome, $categoria, $valor, $foto, $obs, null]);

     $stmt = $conn->prepare('SELECT * FROM restaurante_bd.pedido');
  
     $stmt->execute();
   
     $r["pedido"] = $stmt->fetchAll();
 }

 catch (PDOException $e) 
 
 {

    echo $e->getMessage();
 }


include("Produto.php");


$conn = null;

?>