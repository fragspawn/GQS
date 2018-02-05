<?php
//  Session Management

    if(isset($_GET['pageid'])) {
        $pageid = $_GET['pageid'];
    } else {
        $pageid = 'home';
    }
    $contentquery = "SELECT * FROM static WHERE short_title = '" . $pageid . "';";
    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($contentquery);
    $stmt->execute();
    $staticresult = $stmt->fetch(PDO::FETCH_ASSOC);

//  Render HTML
    include "header.php";
?>
<?php
    // Body Content
    include "menu.php";

    echo "<h1>" . $staticresult['title'] . "</h1>";
    echo "<h3>" . $staticresult['byline'] . "</h3>";
    echo "<div>" . $staticresult['body'] . "</div>";
?>
<?php

    include "rego.php";
?>
<?php
    include "login.php";
?>
<?php
    // End Body Content
    include "footer.php";
?>
