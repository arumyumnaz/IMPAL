<!DOCTYPE html>
<html lang="en">
<?php 

require_once("koneksi.php");
session_start();
// if ($_SESSION['loggedIn']){
    $id = $_GET['id'];
    $quiz = mysqli_query($koneksi, "SELECT * FROM quiz WHERE id = $id");
    
// }else{
//     header('location:login.php');
// }

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
        <div class="input">
            <h1>Tabel Soal QUBIQ GAME</h1>
            <?php  while($get = mysqli_fetch_array($quiz)) {?> 
            <form action="updateA.php?id=<?= $get['id']?>" method="POST">
                <textarea placeholder="Soal" name="soal" rows="10" cols="30"><?= $get['soal_quiz']?></textarea>
                <textarea placeholder="Jawaban Benar" name="jwb" ><?= $get['jawaban_quiz']?></textarea>
                <textarea placeholder="Pilihan Jawaban 1" name="jwb2" ><?= $get['jawaban_quiz2']?></textarea>
                <textarea placeholder="Pilihan Jawaban 2" name="jwb3" ><?= $get['jawaban_quiz3']?></textarea>
                <textarea placeholder="Pilihan Jawaban 3" name="jwb4" ><?= $get['jawaban_quiz4']?></textarea>
                <button type="submit" name='submit'>Edit</button>
            </form>
            <?php }?>
        </div>
    </div>
</body>
</html>
