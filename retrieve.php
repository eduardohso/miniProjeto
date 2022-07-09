<?php
  require "connect.inc.php";

  $name="horario.png";
  $stmt=$conn->prepare("SELECT * from `imagens` where `img_nome`=?");
  $stmt->execute([$name]);
  $img=$stmt->fetch();
  $img=$img[`img_data`];

  header("Content-Type: image/png");
  echo $img;
?>