<?php
    session_start();

//RESET LOGIN RETRIES
    if(!isset($_SESSION['last_time'])) {
        $_SESSION['last_time'] = time();
    }

    if($_SESSION['last_time'] < (time() - (60 * 15))) {
        $_SESSION['tries'] = 0;
    }

    $_SESSION['last_time'] = time();

//LOG activities
    $log_sql = "INSERT INTO  logs (session_ID, URL, IP) VALUES ('" . session_id() . "', '" . 
                $_SERVER['REQUEST_URI'] . "',  '" . $_SERVER['HTTP_HOST'] . "');";
    $conn = dbConnect();
    $stmt = $conn->prepare($log_sql);
    $stmt->execute();

// Set user to anonymous if not already
    if(!isset($_SESSION['usertype'])) {
        $_SESSION['usertype'] = 0;
    }

?>
