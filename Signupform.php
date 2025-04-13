<?php
session_start();
include ('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/logo.png"> 
  <link rel="stylesheet" href="style/style.css">
  <title>Signup</title>

  <style>
  
    .pic-container {
      background: url('img/kab.jpg') no-repeat center center fixed;
      background-size: cover;
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      margin-right: 50%;
    }
    
  </style>
</head>
<body>

<nav class="navbar fixed-top navbarr">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="40" height="auto">
      <strong class="text-white">KCEAP SIMS</strong>
    </a>
  </div>
</nav>
 
  <div class="pic-container">
    <div class="container text-center text-white">
      <div class="loginpage">
        <h3>REGISTRATION FORM</h3>
        <?php
        if(isset($_SESSION['status'])){
        ?>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong></strong> 
        <?php echo $_SESSION['status'];?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
        <?php
          unset($_SESSION['status']);
        }
        ?>
        <div class="loginForm">
          <form action="signup.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Enter you fullname" required><br>
                <input type="email" name="email" id="email" placeholder="Enter your email" required><br>
                <input type="password" name="password" id="password" placeholder="Create your password" required><br>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" required><br>
                <button name="submit" type="submit">Register</button><br>
                <span>Already have an account?</span><a href="loginform.php">Login</a>
            </form>
        </div>  
      </div>
    </div>
  </div>

  <footer>
      <div class="foot fixed-bottom">
          <a href="https://www.facebook.com/kceap.kabankalan" target="_blank">Kceap kabankalan</a>
      </div>
  </footer>

  <script>
  document.getElementById('school').addEventListener('change', function() {
    if (this.value === "") {
      alert("Please select a valid level.");
    }
  });
</script>
        
        <script src="script/function.js" ></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>