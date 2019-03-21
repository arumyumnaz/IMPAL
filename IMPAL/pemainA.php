<!DOCTYPE html>
<html lang="en">
<?php

require_once("koneksi.php");

session_start();
//if ($_SESSION['loggedIn']){
    $pemain = mysqli_query($koneksi, "SELECT * FROM pemain");

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Soal - Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <form action="" method="POST">
        <label>Search :</label>
        <input type="text" name=cari placeholder="Search">
        <input type="submit" value="Search">
    </form>

    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
    ?>

    <div class="content">
        <div class="show">
            <h1>Tabel Player QUBIQ GAME</h1>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
                <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysql_query("SELECT * FROM pemain WHERE username_player like '%".$cari."%'");	
                    while($get = mysqli_fetch_array($data)) {?>
                        <tr>
                            <td><?= $get['username_player']?></td>
                            <td><?= $get['email_player']?></td>
                        </tr>
                    <?php  
                    }
                }else{
                    while($get = mysqli_fetch_array($pemain)) {?> 
                    <tr>
                        <td><?= $get['username_player']?></td>
                        <td><?= $get['email_player']?></td>
                    </tr>
                <?php }
                } ?>
            </table>
        </div>
    </div>

</body>
</html>
