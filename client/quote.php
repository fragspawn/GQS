<?php
    include '../db.php';
    include '../session.php';

//  Render HTML
    include "header.php";
?>

<?php
    // Body Content
    include "menu.php";
    // Quotation UI
?>
<div id="contentgroup">
    <div class="contentitem" id="home" style="display: block;"><h1>Home Page</h1><h3>Welcome to the Generic Quotation System. </h3><div><p>You can create custom products that have unique configurations</p>
    <p>Customers can get a price for their perfect product, based on choices they make</p></div></div>
</div>
<?php
    $allrec = getAllLineItems();

// Do Embedded Javascript
    echo '
        <script>
';
    // initialise variables
    foreach($allrec as $onerec) {
        echo 'var ' .  $onerec['system_name'] . ';'; 
    } 

    echo '$(document).ready(function(){

';
    // register sliders
    foreach($allrec as $onerec) {
        echo '
                $(\'#' . $onerec['system_name'] . '_range\').range({
                    min: ' . $onerec['units_min'] . ',
                    max: ' . $onerec['units_max'] . ',
                    start: 0, 
                    step: ' . $onerec['unit_increment'] . ',
                    input: \'#' . $onerec['system_name'] . '_output\',
                    onChange: function(value) {
                        ' . $onerec['system_name']. ' = value; 
                        totalQuote(); 
                    }
                });
        ';
    }
    echo '
            });';

// Total up all quote_items with (units chosen * unit cost) 
        echo '
            function totalQuote() {
                totalValue =';
    foreach($allrec as $onerec) {
        echo ' (' . $onerec['system_name'] . ' * ' . $onerec['unit_cost'] . ') +';
    }
        echo ' 0;
        var formattedValue = totalValue.toFixed().replace(/(\d)(?=(\d{3})+(,|$))/g, \'$1,\');
        $(\'#total_value_output\').html(\' $\' + formattedValue);';
        echo '
            }
        </script>
';
// Do Form
    echo '<form method="POST" action="quote.php">';
    echo '<div class="ui styled fluid accordion">';
    foreach($allrec as $onerec) {
        echo '<div class="title">
    <i class="dropdown icon"></i>
    ' . $onerec['name'] . '
  </div>';
        echo '<div class="content">
    <p>' . $onerec['description'] . '</p> ';
        echo '<div><img height="80" width="80" src="../img/' . $onerec['image_small'] . '"></div>';
        echo '<div class="ui range" id="' . $onerec['system_name'] . '_range"></div>'; 
        echo '<input type "text" size="3" width="3" id="' . $onerec['system_name'] . '_output" value="0" disabled>';
        echo '<span>' . $onerec['units'] . '</span>';
        echo '</div>';
    }
    echo '</div>';
    echo '<input type="submit">';
    echo '</form>';
    echo '<div id="total_value_output">0</div>';
?>
<?php
    // End Body Content
    include "footer.php";
?>
