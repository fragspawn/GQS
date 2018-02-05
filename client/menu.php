<nav class="ui text container">
    <div class="ui borderless inverted main menu">
        <a href="#" class="header item">GQS</a>
<?php

    $menusql = "SELECT short_title FROM static ORDER BY id ASC;";
    $conn = new PDO("mysql:host=localhost;dbname=GQS", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare($menusql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result AS $row) {
        echo '<a href="index.php?pageid=' . $row['short_title'] . '" class="item">' . $row['short_title'] . '</a>';
    }

?>
    </div>
</nav>
<section>
