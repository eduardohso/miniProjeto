<?php

include('connect.inc.php');

  $nome=trim($_POST["nome"]);
  $descricao=$_POST['descricao'];
  $dataInicio=$_POST['dataInicio'];
  $dataFim=$_POST['dataFim'];
  $tipo=$_POST['tipo'];
  $wifi=$_POST['wifi'];
  $estacionamentoGratis= $_POST['estacionamentoGratis'];
  $bebidaGratis= $_POST['bebidaGratis'];

  $sql="INSERT INTO evento (nome, descricao, dataInicio, dataFim, tipo,wifi, estacionamentoGratis, bebidaGratis) VALUES ('$nome','$descricao','$dataInicio','$dataFim','$tipo','$wifi','$estacionamentoGratis','$bebidaGratis')";

  // if(isset($_FILES['banner'])){
  //   $stmt=$conn->prepare("INSERT INTO imagens(img_nome,img_data)VALUES(?, ?)");
  //   $stmt->execute([$_FILES['banner']['name'], file_get_contents($_FILES['banner']['tmp_name'])]);
  // }

  if($conn->query($sql) === TRUE){
    echo "Novo registro criado com sucesso!";
  }else{
    echo "Error: ".$sql."<br>".$conn->error;
  }

  $conn->close();

  header("Location: cadastro.php");
  exit();

?>