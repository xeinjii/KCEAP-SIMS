<?php
session_start();
include('config/config.php');

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: index.php");
  exit();
}

$user_id = $_SESSION['user_id'];

include('./include/header.php');
?>

<body>



  <div class="top-bar">
    <a class="text-white" id="toggle-sidebar" href="#">
      <span class="material-symbols-outlined">menu</span>
    </a>
    <!-- Profile Picture -->
    <div class="profile-circle">
      <img id="profile-pic" src="./img/profile.webp" alt="User Profile"
        onerror="this.onerror=null; this.style.display='none'; document.getElementById('default-icon').style.display='flex';">
      <span id="default-icon" class="material-symbols-outlined" style="display: none;">person</span>
    </div>
  </div>
  </div>

  <?php include './include/aside3.php'; ?>






<!-- Main content -->
<div class="mainpage-centered" style="padding: 20px;">
    <div class="text-center">
      <h1><strong>Welcome to KCEAP SIMS</strong></h1>

      <hr>

      <!-- Scholarship Information Section -->
      <div class="card mt-4 mx-auto" style="max-width: 500px;">
        <div class="card-header">
          <h5 class="card-title"><strong>SCHOLARSHIP INFORMATION</strong></h5>
        </div>
        <div class="card-body">
          <p>To apply for scholarships, view your scholarship status, and track deadlines, please refer to the
            sections below.</p>

          <!-- Example Scholarship Listing -->
          <ul class="list-group">
            <li class="list-group-item">
              <h6><strong>HIGHSCHOOL</strong></h6>
              <form action="">
              <a href="#" class="btn btn-success btn-sm me-4" data-bs-toggle="modal" data-bs-target="#hsrenew">Renew</a>
              <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#hsapply">Apply</a>
              </form>
            </li>
            <li class="list-group-item">
              <h6><strong>COLLEGE</strong></h6>
              <form action="">
              <a href="#" class="btn btn-success btn-sm me-4" data-bs-toggle="modal" data-bs-target="#csrenew">Renew</a>
              <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#csapply">Apply</a>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div><br><br>













  <?php include './include/applyRenew.php'; ?>

  <?php include './include/logout.php'; ?>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggleButton = document.getElementById("toggle-sidebar");
      const sidebar = document.getElementById("sidebar");
      const topBar = document.querySelector(".top-bar");

      toggleButton.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
        topBar.classList.toggle("collapsed");
      });
    });
  </script>


  <script type="text/javascript" src="./script/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./script/sidebarToggle.js"></script> <!-- Sidebar toggle script -->
</body>