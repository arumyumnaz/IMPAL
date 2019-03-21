<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN IN ADMIN</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="login">
            <h1>SIGN IN ADMIN</h1>
            <form action="menuA.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>

                <input type="submit" class="btn btn-success btn-block" name="submit" value="SIGN IN" />

            </form>
        </div>
    </div>
</body>
</html>