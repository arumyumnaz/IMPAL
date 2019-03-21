<!DOCTYPE html>
<html lang="en">

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
            <form action="tambahA.php" method="POST">
                <input type="text" name="id" placeholder="ID Soal">
                <textarea placeholder="Soal" name="soal" rows="10" cols="30"></textarea>
                <textarea placeholder="Jawaban Benar" name="jwb" ></textarea>
                <textarea placeholder="Pilihan Jawaban 1" name="jwb2" ></textarea>
                <textarea placeholder="Pilihan Jawaban 2" name="jwb3" ></textarea>
                <textarea placeholder="Pilihan Jawaban 3" name="jwb4" ></textarea>
                <button type="submit" name='submit'>Add</button>
            </form>
        </div>
    </div>
</body>
</html>