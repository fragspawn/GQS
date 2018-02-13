    <div class="ui fluid borderless inverted pointing main menu">
        <a href="#" class="header item">GQS</a>
<?php
    $menusql = "SELECT short_title FROM static WHERE privilege = " . $_SESSION['usertype'] . " OR privilege = -1 ORDER BY id ASC;";

    $conn = dbConnect(); 
    $stmt = $conn->prepare($menusql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    for($loop = 0; $loop < count($result); $loop++) {
        // Right justify the last item in the menu
        if($loop == count($result) - 1) {
            echo '<div class="right menu"><a onClick="doMenu(\'' . $result[$loop]['short_title'] . '\')" class="item cursoron">' . $result[$loop]['short_title'] . '</a></div>';
        } else {
            echo '<a onClick="doMenu(\'' . $result[$loop]['short_title'] . '\')" class="item cursoron">' . $result[$loop]['short_title'] . '</a>';
        }
    }

?>
    </div>
<section>
