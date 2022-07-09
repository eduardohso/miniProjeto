<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro</title>
</head>
<body>
  <div class="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="eventos.php">Ver eventos</a></li>
   </ul>
  </div>
  <div class="container">
    <div class="cadastro">
      <form action="processo.php" method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Cadastro do evento</legend>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" placeholder="Nome do evento">

          <label for="descricao">Descrição:</label>
          <textarea   id="descricao" name="descricao" placeholder="Descrição do evento"></textarea>

          <label for="dataInicio">Data de início:</label>
          <input type="datetime-local" name="dataInicio" id="dataInicio">

          <label for="dataFim">Data de encerramento:</label>
          <input type="datetime-local" name="dataFim" id="dataFim">

          <label for="tipo">Tipo do evento:</label>
          <input type="text" name="tipo" id="tipo" placeholder="Tipo do evento">

          <label for="banner" >Banner:</label>
          <input type="file" accept="image/*" name="banner" id="banner" class="custom-file-input">

          <div class="check">
            <p>Possui:</p>
            <input type="checkbox" name="wifi" id="wifi" value="WIFI">
            <label>Wifi</label>
            <input type="checkbox" name="estacionamentoGratis" id="estacionamentoGratis" value="Estacionamento Grátis">
            <label>Estacionamento Gratis</label>
            <input type="checkbox" name="bebidaGratis" id="bebidaGratis" value="Bebida Gratis">
            <label>Bebida Gratis</label>
          </div>
          <input type="submit" id="enviar" name="enviar" value="Enviar">
        </fieldset>
      </form>
    </div>
  </div>
  <?php

    include("connect.inc.php");

    $conn->close();
  
  ?>
</body>
</html>
