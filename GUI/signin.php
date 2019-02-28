<!DOCTYPE html>
<html>
<head>
  <title>QUBIQ GAMES</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="get" action="index.php">
    <div class="container">
      <h1>LOGIN</h1>
      <h5>Login to your account.</h5>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <div class="clearfix">
        <button type="submit" class="signupbtn">LOGIN</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">CANCEL</button>
      </div>
    </div>
  </form>
</div>

<div class="hero-image">
  <div class="hero-text">
    <h1>QUBIQ GAMES</h1>
    <p>QUBIQ is an interactive pop quiz game for any kind of user.</p>
    <p>You can gain knowledge or just do some quizes for fun!</p>
    <p>Come play with us and see the fun for yourself!</p>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">REGISTER TO PLAY</button>
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

