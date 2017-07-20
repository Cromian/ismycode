<?php

function showText($emojie_code, $status) {

    print '<h1>Is my code working today?</h1>';

    print '<div class="mood-txt">
            <i class="em ' . $emojie_code . '"></i></br>
            ' . $status . '
          </div>';

}



showText(

    $emojie_code = 'em-smile',
    $status = 'Yes' 

);


?>