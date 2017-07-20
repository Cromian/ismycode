<?php

// Show text function.
function showText($emojie_code, $status_txt) {

    print '<h1>Is my code working today?</h1>';

    print '<div class="mood-txt">
            <i class="em ' . $emojie_code . '"></i></br>
            ' . $status_txt . '
          </div>';

}

// Status varaible extracted from status.json file
$json_file = file_get_contents('status.json');
$json_items = json_decode($json_file, true);
$status = $json_items['status'];

// Logic statements based off $status results.
if ($status == "yes")
{
    showText(
        $emojie_code = 'em-smile',
        $status_txt = 'Yes'  
    );
}

if ($status == "no")
{
    showText(
        $emojie_code = 'em-angry',
        $status_txt = 'No' 
    );

}

if ($status == "sorta")
{
    showText(
        $emojie_code = 'em-confused',
        $status_txt = 'Sorta' 
    );

}






?>