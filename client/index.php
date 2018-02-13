<?php
    include '../db.php';
    include '../session.php';

//  Render HTML
    include "header.php";
?>

<?php
    // Body Content
    include "menu.php";
?>
<?php
    $contentquery = "SELECT * FROM static WHERE privilege = " . $_SESSION['usertype'] . " OR privilege = -1";
    $conn = dbConnect();
    $stmt = $conn->prepare($contentquery);
    $stmt->execute();
    $staticresult = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<div id="contentgroup">';
    foreach($staticresult as $row) {
        echo '<div class="contentitem" id="' . $row['short_title'] . '">';
            echo '<h1>' . $row['title'] . '</h1>';
            echo '<h3>' . $row['byline'] . '</h3>';
            echo '<div>' . $row['body'] . '</div>';
        echo '</div>';
    }
    echo '</div>';
?>
<?php
    // End Body Content
    include "footer.php";
?>
