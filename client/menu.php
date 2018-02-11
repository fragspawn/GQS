<nav class="ui text container">
    <div class="ui borderless inverted main menu">
        <a href="#" class="header item">GQS</a>
<?php

    $menusql = "SELECT short_title FROM static WHERE privilege = 1 ORDER BY id ASC;";
    include '../db.php';
    $stmt = $conn->prepare($menusql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result AS $row) {
        echo '<a onClick="doMenu(\'' . $row['short_title'] . '\')" class="item cursoron">' . $row['short_title'] . '</a>';
    }

?>
    </div>
</nav>
<section>
