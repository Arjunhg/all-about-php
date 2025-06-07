<?php 
    
    // String Functions
    $string = "Hello World!";
    echo strlen($string) . "<br>";
    echo strpos($string, "o") . "<br>";
    echo strpos($string, "World!") . "<br>";
    echo str_replace("World", "PHP", $string) . "<br>";
    echo strtolower($string) . "<br>";
    echo strtoupper($string) . "<br>";
    echo substr($string, 2) . "<br>";
    echo substr($string, 2, 2) . "<br>";
    echo substr($string, 2, -2) . "<br>";
    print_r(explode(" ", $string));
    echo "<br>";

    // Number Functions
    $number = -5.5;
    echo abs($number) . "<br>";
    echo round($number) . "<br>";
    echo pow($number, 3) . "<br>";
    echo sqrt(4) . "<br>";
    echo rand($number, 10) . "<br>";

    // Array Functions
    $fruits = ["apple", "banana", "cherry"];
    echo count($fruits) . "<br>";
    echo (is_array($fruits) ? "Yes, it's an array." : "No, it's not an array.") . "<br>";
    array_push($fruits, "date");
    print_r($fruits);
    echo "<br>";

    array_pop($fruits); // Removes the last element
    print_r($fruits);

    echo "<br>";
    print_r(array_reverse($fruits)); // Reverses the array
    echo "<br>";

    // Date Time
    echo date("D-m-Y H:i:s") . "<br>";
    echo time() . "<br>";

    $var_date = "2025-06-05 18:50:00";
    echo strtotime($var_date) . "<br>";
