<?php

$result = $_POST['status'];

$file = fopen('../status.json', 'w+');
$content = 
'{
    "status": "'. $result .'"
}';
fwrite($file , $content); 
fclose($file);

header('Location: ../');

?>