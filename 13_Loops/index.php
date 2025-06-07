<?php 

    // For Loop
    // for($i = 0; $i <= 10; $i++){
    //     echo $i . "<br>";
    // }

    // While Loop
    // $test = 5;
    // while($test < 10){
    //     echo $test . "<br>";
    //     $test++;
    // }

    // Do While Loop
    // $test = 10;
    // do {
    //     echo $test . "<br>";
    //     $test++;
    // } while($test < 10);

    // For Each Loop
    // $fruits = ["Apple", "Banana", "Cherry"];
    // foreach($fruits as $fruit){
    //     echo $fruit . "<br>";
    // }

    // Associates array
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Cherry" => "Red");
    foreach($fruits as $fruit => $color){
        echo $fruit . " is " . $color . "<br>";
    }