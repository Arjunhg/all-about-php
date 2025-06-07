<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Variables: Use $ -->
    <?php 
        $fullName = "John Doe";
        echo $fullName;
    ?> 

    <!-- Data types -->
    <?php 
        /* 
            Scaler type (contains a single value)
            If not initialized, string = "", int = 0, float = 0.0, bool = false, array = [], object = null
        */
        $string = "Hello, World!";
        $int = 432;
        $float = 3.14;
        $bool = true;
        
        echo "<br>String: $string, Integer: $int, Float: $float, Boolean: $bool<br>";

        // Array type
        $names = array("apple", "banana", "cherry");
        $numbers = [1, 2, 3, 4, 5]; 

        // Object type
        // $object = new Car();
    ?> 

    <!-- Example -->
    <?php 
        $name = "Alice";
        $test = $name;
    ?> 

    <p> Hi! my name is <?php echo $test ?> and I am learning PHP!</p>

    <!-- Type Juggling -->

</body>
</html>