<?php
session_start();
include ('config/config.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $school = $_POST['school'];
        $gradelvl = $_POST['gradelvl'];
        $brgy = $_POST['brgy'];
        $phone = $_POST['phone'];

        $sql = "UPDATE hsrecords SET name = '$name', school = '$school', gradelvl = '$gradelvl', brgy = '$brgy', phone = '$phone' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $_SESSION['sss'] = "Beneficiary saved successfully";
            header("Location: manageHSscholar.php");
        }else{
            $_SESSION['sss'] = "Failed to Update Beneficiary";
            header("Location: manageHSscholar.php");
        }
    }

?>