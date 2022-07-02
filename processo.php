<?php

include('connect.inc.php');


  $nome=$_POST['nome'];
  $descricao=$_POST['descricao'];
  $dataInicio=$_POST['dataInicio'];
  $dataFim=$_POST['dataFim'];
  $tipo=$_POST['tipo'];
  $banner=$_POST['banner'];
  $wifi=$_POST['wifi'];
  $estacionamentoGratis= $_POST['estacionamentoGratis'];
  $bebidaGratis= $_POST['bebidaGratis'];

  $sql="INSERT INTO evento (nome, descricao, dataInicio, dataFim, tipo, banner, wifi, estacionamentoGratis, bebidaGratis) VALUES ('$nome','$descricao','$dataInicio','$dataFim','$tipo','$banner','$wifi','$estacionamentoGratis','$bebidaGratis')";

  if($conn->query($sql) === TRUE){
    echo "Novo registro criado com sucesso!";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }

  $conn->close();

  header("Location: index.php");
  exit();

?>