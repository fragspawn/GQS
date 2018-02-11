<?php

    $insert_sql = "INSERT INTO  users (fname, lname, email, phone) VALUES 
                    ( '" . $_POST['fname'] . "',  '" . $_POST['lname'] . "',  '" . 
                    $_POST['email'] . "',  '" .$_POST['phone'] . "');";

    include '../db.php';
    
    $stmt = $conn->prepare($insert_sql);
    $stmt->execute();

    print $conn->lastInsertId(); 

?>
