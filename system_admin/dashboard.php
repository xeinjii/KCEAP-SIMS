<?php 
session_start();
include '../config/config.php';
include '../include/header3.php';

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../loginForm.php");
    exit();
}
$user_id = $_SESSION['user_id'];

?>
<body>
    <?php
     include '../include/aside2.php';
     include '../include/top-bar.php';
    ?>
   
   
   
 <!-- log out modal-->
    <?php include '../include/adminlogout.php'; ?>
    <script type="text/javascript" src="../script/bootstrap.bundle.min.js"></script>
</body>
</html>