<?php

    $insert_sql = "INSERT INTO  users (fname, lname, email, phone) VALUES 
                    ( '" . $_POST['fname'] . "',  '" . $_POST['lname'] . "',  '" . 
                    $_POST['email'] . "',  '" .$_POST['phone'] . "');";

    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare($insert_sql);
    $stmt->execute();

    print $conn->lastInsertId(); 

?>
