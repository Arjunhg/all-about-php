<?php 

    $name = "John";
    $name = "Doe";
    echo $name . "<br>"; 

    define("PI", 3.14);
    // define("PI", 3.15); // error
    echo PI . "<br>";

    // Constant are global scoped so we can use them inside any function
    function myFunc(){
        echo PI;
    }
    myFunc();

    // Use const for constant arrays (PHP 7.0+)
    const NUM = [1, 2, 3];
    // NUM[0] = 10; // This will cause an error because constants cannot be modified
    echo NUM[0] . "<br>";