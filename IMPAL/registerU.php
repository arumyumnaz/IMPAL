<?php

require_once("koneksi.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO pemain (username_player, email_player, password_player) VALUES ('$username', '$email', '$password')";
        jalankanSQL($koneksi, $sql);
        header("Location: start.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QUBIQ GAME</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body class="bg-light">
    <!-- navbar -->
    <!-- <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">QUBIQ GAME</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav> -->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" method="POST" action="">
            <div class="container">
            <h1>REGISTER</h1>
            <h5>Please fill in this form to create an account.</h5>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>
            </form>
            <div class="clearfix">
                <button type="submit" class="signupbtn" name="submit">SIGN UP</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">CANCEL</button>
                <p>Already have an account? <a href="loginU.php">SIGN IN HERE</a></p>
            </div>
            </div>
        </form>
    </div>

    <div class="hero-image">
        <div class="hero-text">
            <h1>QUBIQ GAMES</h1>
            <h6>QUBIQ is an interactive pop quiz game for any kind of user.</h6>
            <h6>You can gain knowledge or just do some quizes for fun!</h6>
            <h6>Come play with us and see the fun for yourself!</h6>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SIGN UP TO PLAY</button>
            <p>Already have an account? <a href="loginU.php">SIGN IN HERE</a></p>

        </div>
    </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>