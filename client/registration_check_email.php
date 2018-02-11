<?php
    $select_sql = "SELECT email from users where email = '" . $_GET['email'] . "';";

    include '../db.php';

    $stmt = $conn->prepare($select_sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if(count($result) > 0) {
        echo "red text";
    } else {
        echo "green tick";
    }
?>
