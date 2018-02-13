<?php
    include '../db.php';
    include '../session.php';

    if(isset($_SESSION['tries'])) { 
        $_SESSION['tries'] = $_SESSION['tries'] + 1;
    } else {
        $_SESSION['tries'] = 1;
    }   
    if($_SESSION['tries'] > 3) {
        $_SESSION['error'] = "Too Many login Attempts Account is locked";
        header('Location: index.php');
        die();
    }

    $login_sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . 
                  $_POST['password'] . "';";

    $conn = dbConnect();

    $stmt = $conn->prepare($login_sql);
    $stmt->execute();
    $result = $stmt->fetch();

    if($stmt->rowcount() == 0) {
        $_SESSION['error'] = "Login invalid please try again";
        header('Location: index.php');
    } else {
        $_SESSION['userid'] = $result['ID']; 
        $_SESSION['usertype'] = $result['usertype']; 
        $_SESSION['message'] = "Login successful";
        header('Location: index.php');
    }
?>
