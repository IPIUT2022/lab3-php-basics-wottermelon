<?php

   $example_file = fopen("example.txt", "r") or die("Error!");
    $readFile = fread($example_file, 25000);
    fclose($example_file);

    $s = preg_split("/\r\n|\n|\r| /", $readFile);

    $indexedArray = array();

    for($i = 0; $i < count($s) - 2; $i += 2) {
        $indexedArray[$checked_File[$i]] = $s[$i+1];
    }

    foreach ($indexedArray as $key => $value) {
        echo "Key: \"${key}\" Value: \"${value}\" </br>";
    }

?>