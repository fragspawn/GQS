<?php
    header('Content-Type: application/json');
    include '../db.php';
    $select_sql = "SELECT email from users where email = '" . $_GET['email'] . "';";

    $conn = dbConnect();

    $stmt = $conn->prepare($select_sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if(count($result) > 0) {
        echo json_encode(Array('emailexists'=>true)); 
    } else {
        echo json_encode(Array('emailexists'=>false)); 
    }
?>
