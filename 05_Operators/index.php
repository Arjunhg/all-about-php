<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../04_Handling_Form_Data/styles.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // String Operator
        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b; //. is called the concatenation operator
        echo $c . "<br>"; 

        // Arithmetic Operators
        echo 1 + 2 . "<br>";
        echo 5 - 3 . "<br>";
        echo 7 / 2 . "<br>";
        echo 1 + 2 * 4 . "<br>"; // Multiplication has higher precedence than addition
        echo (1 + 2) * 4 . "<br>"; // Use parentheses to change precedence
        echo 2 + "1" . "<br>"; // PHP automatically converts the string "1" to an integer

        // Assignment Operators
        $x = 2;
        $x += 3; // Same as $x = $x + 3
        echo $x . "<br>"; // Outputs 5

        // Comparison Operators
        $p = 5;
        $q = "5";
        if($p == $q) { // use === for strict comparison (type and value)
            echo "p is equal to q<br>";
        } else {
            echo "a is not equal to q<br>";

        }
        // !=, !==, <, >, <=, >= are also comparison operators

        // Logical Operators
        $r = 2;
        $s = 3;
        if($p == $q && $r < $s) { // && is logical AND
            echo "Both conditions are true<br>";
        } else {
            echo "At least one condition is false<br>";
        }

        // Increment/Decrement Operators
        echo $p-- . "<br>"; 
        echo ++$p . "<br>";
    ?>

</body>
</html>