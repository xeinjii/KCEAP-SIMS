<?php 
    session_start();   
    include '../config/config.php';

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $school = $_POST['school'];
        $address = $_POST['address'];
        $income = $_FILES['income']['name'];
        $birthcert = $_FILES['birthcert']['name'];
        $comelec = $_FILES['comelec']['name'];
        $card = $_FILES['card']['name'];
        $moral = $_FILES['moral']['name'];
        $user_id = $_POST['user_id']; 
        $submitted_at = $_POST['submitted_at'];

        $income_tmp = $_FILES['income']['tmp_name'];
        $birthcert_tmp = $_FILES['birthcert']['tmp_name'];
        $comelec_tmp = $_FILES['comelec']['tmp_name'];
        $card_tmp = $_FILES['card']['tmp_name'];
        $moral_tmp = $_FILES['moral']['tmp_name'];

       
        $income_folder = '../College_documents/'.$income;
        $birthcert_folder = '../College_documents/'.$birthcert;
        $comelec_folder = '../College_documents/'.$comelec;
        $card_folder = '../College_documents/'.$card;
        $moral_folder = '../College_documents/'.$moral;

        
        if (move_uploaded_file($income_tmp, $income_folder) &&
            move_uploaded_file($birthcert_tmp, $birthcert_folder) &&
            move_uploaded_file($comelec_tmp, $comelec_folder) &&
            move_uploaded_file($card_tmp, $card_folder) &&
            move_uploaded_file($moral_tmp, $moral_folder)) {

           
            $query = "INSERT INTO college_pending (user_id, name, school, address, income, birthcert, comelec, card, moral, submitted_at) 
                      VALUES ('$user_id', '$name', '$school', '$address', '$income', '$birthcert', '$comelec', '$card', '$moral', NOW()";

            if (mysqli_query($conn, $query)) {
                $_SESSION['success'] = "Application submitted successfully!";
                header("Location: ../mainpage.php");
                exit();
            } else {
                $_SESSION['error'] = "Failed to submit application: " . mysqli_error($conn);
                header("Location: ../mainpage.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Failed to upload files.";
            header("Location: ../mainpage.php");
            exit();
        }
    }
?>