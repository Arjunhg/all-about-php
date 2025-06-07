<?php 

    $test = "John";
    echo $test . "<br>";

    function myFunc(){
        // define a local variable
        $localVar = 0;
        $localVar++;

        // define a static variable
        static $staticVar = 0;
        $staticVar++;
        return $staticVar;

        // return $localVar;
    }

    // Class scope
    class MyClass {
        public $classVar = "Hello, World!";

        public function myMethod(){
            // echo self::$classVar; use with static method
            echo $this->classVar;
        }
    }

    echo myFunc() . "<br>"; // This will output "Hello, World!"
    echo myFunc() . "<br>";

    // echo MyClass::$classVar . "<br>";
    // echo MyClass::myMethod() . "<br>";
    $myObject = new MyClass();
    echo $myObject->myMethod() . "<br>";