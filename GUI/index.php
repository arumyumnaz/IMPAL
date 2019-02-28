<!DOCTYPE html>
<html>
<head>
  <title>QUBIQ GAMES</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <!--koneksi sigunp-->
  <?php
    require("koneksi.php");

    $email = $_GET["email"];
    $password = $_GET["psw"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into pemain(email_player, password_player) values('$email', '$password')";
  
    jalankanSQL($koneksi, $sql);

  ?>

</head>


<div class="hero-image">
  <form class="hero" method="get" action="quiz.php">
    <div class="hero-text">
      <h1>QUBIQ GAMES</h1>
      <p>Are you ready? Press start to begin</p>
      <button>START</button>
  </div>
</div>




</html>