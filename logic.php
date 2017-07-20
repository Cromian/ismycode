<?php

// Show text function.
function showText($emojie_code, $status_txt, $css_class) {

    print '<div class="' . $css_class . '">
            <h1>Is my code working today?</h1>
            <i class="em ' . $emojie_code . '"></i></br>
            <span class="sat-txt">' . $status_txt . '</span>
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
        $status_txt = 'Yes',
        $css_class = 'yes' 
    );
}

if ($status == "no")
{
    showText(
        $emojie_code = 'em-angry',
        $status_txt = 'No',
        $css_class = 'no'
    );

}

if ($status == "sorta")
{
    showText(
        $emojie_code = 'em-confused',
        $status_txt = 'Sorta',
        $css_class = 'sorta'
    );

}






?>