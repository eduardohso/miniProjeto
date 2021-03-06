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
    </ul>
  </div>
  <div class="container" id="eventoBloco">

    <?php
    include("connect.inc.php");
    $sql = "SELECT * FROM evento";
    $result=$conn->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $id=$row["id"];
        $nome=$row["nome"];
        $descricao=$row["descricao"];
        $dataInicio=$row["dataInicio"];
        $banner='uploads/'.$row["banner"];

        $dataI = strtotime( $dataInicio );
        $dataInicio = date( 'd/m/Y - H:i', $dataI );
        
        echo "<div class='eventoBloco'>
            <a href='eventoDescricao.php?id=$id'>
              <img class='banner' src='$banner'/>
              <br>$nome
              <br><p>$descricao<br>$dataInicio</p>
            </a>
            </div>";
      }

    }else{
      echo "<h1 class='container'>Não há eventos cadastrados!</h1>";
    }

    $conn->close();

    ?>
    
  </div>
</body>
</html>