<?php 

    declare(strict_types=1);

    function first(){
        return "Hello World!";
    }

    function second($name){
        return "Hello " . $name . "!";
    }

    function third($name, $age = 18){
        return "Hello " . $name . ", you are " . $age . " years old!";
    }

    function fourth(string $name){
        return "Hello " . $name . "!";
    }

    $test = "John";
    function fifth(){
        // return $test; // This will cause an error because $test is not defined in this scope
        global $test;
        return "Hello " . $test . "!";
    }

    // echo first();
    // echo second("PHP");
    // echo third("PHP");
    // echo fourth("PHP");
    echo fifth();