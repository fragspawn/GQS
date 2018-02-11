<?php
//  Session Management

    if(isset($_GET['pageid'])) {
        $pageid = $_GET['pageid'];
    } else {
        $pageid = 'home';
    }
    $contentquery = "SELECT * FROM static";
    include '../db.php';
    $stmt = $conn->prepare($contentquery);
    $stmt->execute();
    $staticresult = $stmt->fetchAll(PDO::FETCH_ASSOC);

//  Render HTML
    include "header.php";
?>

<?php
    // Body Content
    include "menu.php";
?>
<div id="contentgroup">
<?php
    foreach($staticresult as $row) {
        echo '<div class="contentitem" id="' . $row['short_title'] . '">';
            echo '<h1>' . $row['title'] . '</h1>';
            echo '<h3>' . $row['byline'] . '</h3>';
            echo '<div>' . $row['body'] . '</div>';
        echo '</div>';
    }
?>
</div>
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
