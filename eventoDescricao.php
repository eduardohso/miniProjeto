<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Eventos</title>
</head>
<body>
  <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="cadastro.php">Cadastar evento</a></li>
      <li><a href="eventos.php">Ver eventos</a></li>
    </ul>
  </div>
  <div class="container">

    <?php
    include("connect.inc.php");
    $id= $_REQUEST['id'];

    $sql = "SELECT * FROM evento WHERE id='$id'";
    $result=$conn->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $nome=$row["nome"];
        $descricao=$row["descricao"];
        $dataInicio=$row["dataInicio"];
        $dataFim=$row["dataFim"];
        $tipo=$row["tipo"];
        $banner='uploads/'.$row["banner"];
        $wifi=$row["wifi"];
        $estacionamentoGratis=$row["estacionamentoGratis"];
        $bebidaGratis=$row["bebidaGratis"];

        // formata a data
        $dataI = strtotime( $dataInicio );
        $dataInicio = date( 'd/m/Y - H:i', $dataI );
        $dataF = strtotime( $dataFim );
        $dataFim = date( 'd/m/Y - H:i', $dataF );

        echo "
          <div class='eventoDesc'>
            <img class='banner' src='$banner'/>
            <fieldset>
              <legend id='nome'>$nome</legend>
              <legend>Descrição:</legend>
              <p id='descricao'>$descricao</p>
              <legend>Data de início:</legend>
              <p id='dataInicio'>$dataInicio</p>
              <legend>Data de encerramento:</legend>
              <p id='dataFim'>$dataFim</p>
              <legend>Tipo de evento:</legend>
              <p id='tipo'>$tipo</p>
        ";
             
        if($wifi||$estacionamentoGratis||$bebidaGratis!=''){
          echo "<legend>Possui:</legend><p id='adicionais'>";
          if($wifi!='')
            echo "$wifi<br>";
          if($estacionamentoGratis!='')
            echo "$estacionamentoGratis<br>";
          if($bebidaGratis!='')
            echo "$bebidaGratis";
        }
        echo "</p> </fieldset></div>";
      }

    }else{
      echo "0 results";
    }

    $conn->close();
  ?>
  </div>
</body>
</html>