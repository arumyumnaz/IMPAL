
<?php
  require("koneksi.php");

  $email = $_GET["email"];
  $password = $_GET["psw"];

  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "insert into pemain(email_player, password_player) values('$email', '$password')";
 
  jalankanSQL($koneksi, $sql);

?>
