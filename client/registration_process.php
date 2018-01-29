<?php

    $insert_sql = "INSERT INTO  users (fname, lname, email, phone) VALUES 
                    ( '" . $_POST['fname'] . "',  '" . $_POST['lname'] . "',  '" . 
                    $_POST['email'] . "',  '" .$_POST['phone'] . "');";

    $select_sql = "SELECT email from users where email = '" . $_POST['email'] . "';";

    print '<p>' . $select_sql . '</p>';
    print '<p>' . $insert_sql . '</p>';
?>
