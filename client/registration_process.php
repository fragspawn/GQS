<?php

    $insert_sql = "INSERT INTO  users (fname, lname, email, phone) VALUES 
                    ( '" . $_POST['fname'] . "',  '" . $_POST['lname'] . "',  '" . 
                    $_POST['email'] . "',  '" .$_POST['phone'] . "');";

    $select_sql = "SELECT email from users where email = '" . $_POST['email'] . "';";


    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $stmt = $conn->prepare($insert_sql);
    $stmt->execute();

    print $conn->lastInsertId(); 

?>
