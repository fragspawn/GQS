<?php
    session_start();
    include '../db.php';

    $insert_sql = "INSERT INTO  users (fname, lname, email, phone, password, dob, usertype) VALUES 
                    ( '" . $_POST['fname'] . "',  '" . $_POST['lname'] . "', '" . 
                    $_POST['email'] . "',  '" . $_POST['phone'] . "', '" .
                    $_POST['password'] . "', '" . $_POST['dob'] . "', 1);";

    $conn = dbConnect();
 
    $stmt = $conn->prepare($insert_sql);
    $stmt->execute();

    if($conn->lastInsertId() > 0) { 
        $_SESSION['message'] = 'User No: ' . $conn->lastInsertId() . ' Created'; 
    } else {
        $_SESSION['error'] = 'Database error - Failed to insert registration data';
    }
    header('Location: index.php');
?>
