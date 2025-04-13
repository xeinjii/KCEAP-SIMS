<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap">
    <link rel="stylesheet" href="./style/homepage.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Homepage — KCEAP </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <img src="img/logo.png" alt="Logo" width="40" height="auto"> <strong>KCEAP SIMS</strong>
            </a>
            <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text-white ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#get-started">Get Started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#features">key Features</a>
                    </li>
                    <li>
                        <a class="nav-link active text-white" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="get-started" class="getstarted">
        <div class="get-content">
            <img class="logo" src="img/logo.png" width="150" height="auto" alt="logo"><br>
            <div class="text-content">
                <span class="text-dark">
                    Welcome to the <strong>KCEAP Scholarship Information And Management System (SIMS)</strong>— your
                    one-stop platform to learn about, apply for, and manage your scholarship.
                </span><br>
                <span class="text-dark">
                    Designed for a smooth and transparent experience for both applicants and administrators.
                </span>
                <div class="actions">
                    <a class="btn btn-primary" href="#">Login</a>
                    <a class="btn btn-primary" href="#">Signup</a>
                </div>
            </div>
        </div>
    </section>


    <section id="about-us" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="img/logo.png" alt="images">
                </div>
                <div class="col-lg-6 about-content">
                    <h2>ABOUT US</h2>
                    <span>The KCEAP Scholarship Information and Management System streamlines the application, review, and
                        disbursement process, ensuring efficient and transparent scholarship administration for eligible
                        students.</span><br><br>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#">LEARN MORE</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <h1 class="mb-4"><strong>KEY FEATURES:</strong></h1>
            <div class="row justify-content-center">
                <!-- Feature 1 -->
                <div class="col-md-3 text-center line">
                    <img src="img/process.png" width="50" height="auto" alt="Feature 1" class="feature-icon mb-3">
                    <h3>Easy Application Process</h3>
                    <p>Streamlined application process for students.</p>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-3 text-center line">
                    <img src="img/upload.png" width="50" height="auto" alt="Feature 2" class="feature-icon mb-3">
                    <h3>Secure Document Upload</h3>
                    <p>Upload and manage your supporting documents quickly and safely.</p>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-3 text-center line">
                    <img src="img/data-management.png" width="100" height="auto" alt="Feature 3"
                        class="feature-icon mb-3">
                    <h3>Secure Data Management</h3>
                    <p>Your data is safe and secure with us.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-white bg-success" id="footer">
        <div class="container py-5">
            <div class="row">
                <!-- Contact Us Section -->
                <div class="col-md-4 col-sm-4 text-center text-md-start mb-4">
                    <h5>Contact Us</h5>
                    <p>Old City Hall,<br>Kabankalan City, Philippines</p>
                    <p><i class='bx-fw bx bx-envelope'></i>: example@example.com<br>
                        <i class='bx-fw bx bx-phone'></i>: 0964 952 1388
                    </p>
                    <p><i class='bx- fw bx bxl-facebook-circle'>: </i><a class="text-white"
                            href="https://www.facebook.com/share/1HgsUuBAvC/" target="_blank"> Kceap kabankalan</a></p>
                </div>
            </div>

            <div class="text-center">
                <hr class="bg-light">
                <p class="">&copy; 2025 KCEAP SIMS. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <script src="script/bootstrap.bundle.min.js"></script>
</body>

</html>