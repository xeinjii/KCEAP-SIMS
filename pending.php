<?php
session_start();
include 'config/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: loginForm.php");
    exit();
}
$user_id = $_SESSION['user_id'];
include './include/header2.php'
    ?>



<body>

    <?php include './include/aside.php'; ?>

    <div class="top-bar">
        <h4><strong>PENDING LIST</strong></h4>
        <a href="#">HIGHSCHOOL LIST</a>
    </div><br>



   

    <?php include './include/logout.php'; ?>
    <script type="text/javascript" src="./script/bootstrap.bundle.min.js"></script>
</body>