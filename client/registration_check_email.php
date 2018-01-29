<?php

    $select_sql = "SELECT email from users where email = '" . $_POST['email'] . "';";

    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $stmt = $conn->prepare($select_sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if(is_array($result)) {
        echo 'true';
    } else {
        echo 'false';
    }
?>
