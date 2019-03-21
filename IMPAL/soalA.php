<!DOCTYPE html>
<html lang="en">
<?php

require_once("koneksi.php");

session_start();
//if ($_SESSION['loggedIn']){
    $quiz = mysqli_query($koneksi, "SELECT * FROM quiz");
//}else{
    //header('location:loginA.php');
//}

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
    <div class="content">
        <div class="show">
            <h1>Tabel Soal QUBIQ GAME</h1>
            <table>
                <tr>
                    <th>Soal</th>
                    <th>Pilihan Jawaban Benar</th>
                    <th>Pilihan Jawaban 1</th>
                    <th>Pilihan Jawaban 2</th>
                    <th>Pilihan Jawaban 3</th>
                    <th>Aksi</th>
                </tr>
                <?php  while($get = mysqli_fetch_array($quiz)) {?> 
                <tr>
                    <td><?= $get['soal_quiz']?></td>
                    <td><?= $get['jawaban_quiz']?></td>
                    <td><?= $get['jawaban_quiz2']?></td>
                    <td><?= $get['jawaban_quiz3']?></td>
                    <td><?= $get['jawaban_quiz4']?></td>
                    <td>
                        <?php echo " <a href='editA.php?id=$get[id]'>EDIT</a>" ?>
                        <?php echo " <a href='deleteA.php?id=$get[id]'>DELETE</a>" ?>
                    </td>
                </tr>
                <?php }?>
            </table>
            <a href="addA.php">ADD</a>
        </div>
    </div>
</body>
</html>
