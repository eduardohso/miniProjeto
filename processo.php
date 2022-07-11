<?php

  include('connect.inc.php');

  $nome=trim($_POST["nome"]);
  $descricao=trim($_POST['descricao']);
  $dataInicio=$_POST['dataInicio'];
  $dataFim=$_POST['dataFim'];
  $tipo=trim($_POST['tipo']);
  $wifi=$_POST['wifi'];
  $estacionamentoGratis= $_POST['estacionamentoGratis'];
  $bebidaGratis= $_POST['bebidaGratis'];
  
  $targetDir = "uploads/";
  $fileName = basename($_FILES["banner"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  move_uploaded_file($_FILES["banner"]["tmp_name"], $targetFilePath);

  $sql="INSERT INTO evento (nome, descricao, dataInicio, dataFim, tipo,wifi, estacionamentoGratis, bebidaGratis, banner) VALUES ('$nome','$descricao','$dataInicio','$dataFim','$tipo','$wifi','$estacionamentoGratis','$bebidaGratis', '".$fileName."')";

  if($conn->query($sql) === TRUE){
    echo "Novo registro criado com sucesso!";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }

  $conn->close();

  header("Location: cadastro.php");
  exit();

?>