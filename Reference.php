<?php

//Reference trong function
    $name = "Nguyễn Xuân Vinh";

    function changeName(& $yourName)
    {
        $yourName = "Bất tử";
    }

    changeName($name);
    echo $name;

//Foreach để thay đổi giá trị trong Array

    $bands = array( "The Who", "The Beatles", "The Rolling Stones" );

    foreach ($bands as & $b) {
        $b = strtoupper($b);
    }

    echo '<pre>';
    print_r($bands);
    echo '</pre>';
