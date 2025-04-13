<?php
session_start();

include ('config/config.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']); // New field for user type

    $sql = "SELECT * FROM accounts WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if ($count_email == 0) {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO accounts (name, email, password, user_type, created_at) VALUES ('$name', '$email', '$hash', 'student', NOW())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $_SESSION['status'] = "Registration Successful!!";
                header("Location: signupForm.php");
            } else {
                $_SESSION['status'] = "Registration Failed!!";
                header("Location: signupForm.php");
            }
        } else {
            $_SESSION['status'] = "Passwords do not match!!";
            header("Location: signupForm.php");
        }
    } else {
        $_SESSION['status'] = "Email already exists";
        header("Location: signupForm.php");
    }
}
?>