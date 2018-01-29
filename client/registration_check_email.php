<?php
    $select_sql = "SELECT email from users where email = '" . $_GET['email'] . "';";

    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare($select_sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if(count($result) > 0) {
        echo "red text";
    } else {
        echo "green tick";
    }
?>
