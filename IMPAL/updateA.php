<?php
// include database connection file
include_once("koneksi.php");
require_once("auth.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$soal = $_POST['soal'];
$jwb = $_POST['jwb'];
$jwb2 = $_POST['jwb2'];
$jwb3 = $_POST['jwb3'];
$jwb4 = $_POST['jwb4'];

$result = mysqli_query($koneksi, "UPDATE quiz SET soal_quiz='$soal', jawaban_quiz='$jwb', jawaban_quiz2='$jwb2', jawaban_quiz3='$jwb3', jawaban_quiz4='$jwb4' WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:soalA.php");
?>