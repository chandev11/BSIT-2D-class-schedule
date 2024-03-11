<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="index.js" />
  <title>Login</title>
</head>

<body style="background-image: url(pic/tete.jpg); background-position: center">
  <div class="logo1"><img src="pic/logotea.png" alt="" /></div>

  <div class="container">
    <div class="box form-box">


      <?php
 
 include("php/config.php");
if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM user WHERE email='$email' 
   AND password='$password'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);
    if(is_array($row) && !empty($row)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['user_id'] = $row['user_id'];
    } else {
        echo "<div class='message'>
         <p>Wrong Username or Password</p>
          </div> <br>";
        echo "<a href='login.php'><button class='btn'>Go Back</button>";
    }
    if(isset($_SESSION['email'])) {
        header("Location: home.php");
    }
} else {

    ?>


      <header>Login</header>
      <form action="" method="post">
        <div class="field input">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" autocomplete="off" required />
        </div>

        <div class="field input">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" autocomplete="off" required />

          <h5>Forgot Password?</h5>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Login" required />
        </div>
        <div class="links">
          Don't have account? <a href="register.php">Sign Up Now</a>


        </div>
        <div class="socialmedia">
          <img src="pic/google.png" alt="">
          <img src="pic/facebook.png" alt="">
          <img src="pic/instagram.png" alt="">
          <img src="pic/twitter.png" alt="">
        </div>


      </form>

    </div>

    <?php } ?>
  </div>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>