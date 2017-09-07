<?php

if(!empty($_POST['data'])){
    $file = __DIR__.'/counter.txt';

    $data = $_POST['data'];

    $fileData = file_get_contents($file, true);
    $fileData = intval($fileData) - 1;

    $fileData = $fileData < 0 ? 0 : $fileData;

    $file = fopen($file, "w") or die("Unable to open file!");
    fwrite($file, $fileData);
    fclose($file);

    echo 1;
}

echo 0;