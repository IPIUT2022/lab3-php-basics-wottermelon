<?php

   $digitsArray = array('1', '2', '3', '4', '5');

    echo "Original Array: </br>";
    foreach($digitsArray as $digit) {
        echo $digit . "\n";
    }

    print "</br>";

    array_splice($digitsArray, 3, 0,'$');
    echo "After inserting $ the array is: </br>";
    foreach($digitsArray as $digit) {
        echo $digit . "\n";
    }

?>