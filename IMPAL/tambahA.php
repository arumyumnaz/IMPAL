<?php 

    require_once("auth.php");
    include_once("koneksi.php");
    
    $id = $_POST['id'];
    $soal = $_POST['soal'];
    $jwb = $_POST['jwb'];
    $jwb2 = $_POST['jwb2'];
    $jwb3 = $_POST['jwb3'];
    $jwb4 = $_POST['jwb4'];
    
    $result = mysqli_query($koneksi, "INSERT INTO quiz (id, soal_quiz, jawaban_quiz, jawaban_quiz2, jawaban_quiz3, jawaban_quiz4) VALUE ('$id','$soal','$jwb','$jwb2','$jwb3','$jwb4')");
    header("Location:soalA.php");
      
?>
