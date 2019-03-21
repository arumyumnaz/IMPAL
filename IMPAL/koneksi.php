 <?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $namaDB = "qubiq";

  $koneksi = mysqli_connect($servername, $username, $password, $namaDB);
  if($koneksi == false){
    die("Koneksi Gagal. ".mysqli_connect_error());
  }
  //echo "Koneksi Berhasil.";

  function jalankanSQL($koneksi, $sql){
    $hasil = mysqli_query($koneksi, $sql);
    if($hasil == false){
      die("Error di : ".$sql."<br>".mysqli_error());
    }
    //echo "<br/>Perintah SQL Sukses.";
    return $hasil;
  }
  
  $_SESSION['loggedIn'] = TRUE;
?>