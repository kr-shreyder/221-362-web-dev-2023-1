<?php

function outNumAsLink($n, $html_type) {
    return '<a href="?content='.$n.'&html_type='.$html_type.'"'.'>'.$n.'</a>';
}

function getResultLink($result, $html_type) {
    if(in_array($result, range(1, 9)))
        return outNumAsLink($result, $html_type);
    else
        return $result;
}

// DIV
function outDivForm($n, $html_type) {
    for($i = 2; $i <= 9; $i++) {
        $nLink = outNumAsLink($n, $html_type);
        $iLink = outNumAsLink($i, $html_type);
        $resultLink = getResultLink($i * $n, $html_type);
        echo '<div>';
        echo $nLink.'x'.$iLink.'='.$resultLink;
        echo '</div>';
    }
}
;

// TABLE
function outTableForm($n, $html_type) {
    for($i = 2; $i <= 9; $i++) {
        $nLink = outNumAsLink($n, $html_type);
        $iLink = outNumAsLink($i, $html_type);
        $resultLink = getResultLink($i * $n, $html_type);
        echo '<tr>';
        echo '<td>';
        echo $nLink.'x'.$iLink.'='.$resultLink;
        echo '</td>';
        echo '</tr>';
    }
}
;


function fullMultiTableCreator($html_type) {
    if($html_type == 'TABLE') {
        echo '<table>';
        for($i = 2; $i < 10; $i++) {
            echo '<tbody>';
            outTableForm($i, $html_type);
            echo '</tbody>';
        }
        echo '</table>';
    } else {
        for($i = 2; $i < 10; $i++) {
            echo '<div class="tableRow">';
            outDivForm($i, $html_type);
            echo '</div>';
        }

    }
}
;

function onceRowCreator($n, $html_type) {
    if($html_type == 'TABLE') {
        echo '<table>';
        echo '<tbody>';
        echo '<style>td, th { font-size: 1.3em; }</style>';
        outTableForm($n, $html_type);
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<div class="tableOnceRow">';
        outDivForm($n, $html_type);
        echo '</div>';
    }
}
;

?>