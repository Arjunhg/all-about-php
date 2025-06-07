<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $fruits = ["apple", "banana", "cherry"];
        $fruits[1] = "blueberry"; // Change the second element
        $fruits[4] = "date"; // Add a new element to the array
        echo $fruits[1] . "<br>";

        unset($fruits[1]); // Remove the second element
        echo "After unset: " . $fruits[1] . "<br>"; // This will output nothing since the element has been removed
        
        // Let's see the array structure
        echo "<h3>Array Structure:</h3>";
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        
        // Test what happens with missing indices
        echo "<h3>Testing Missing Indices:</h3>";
        echo "Index 0: " . (isset($fruits[0]) ? $fruits[0] : "NOT SET") . "<br>";
        echo "Index 1: " . (isset($fruits[1]) ? $fruits[1] : "NOT SET") . "<br>";
        echo "Index 2: " . (isset($fruits[2]) ? $fruits[2] : "NOT SET") . "<br>";
        echo "Index 3: " . (isset($fruits[3]) ? $fruits[3] : "NOT SET") . "<br>";
        echo "Index 4: " . (isset($fruits[4]) ? $fruits[4] : "NOT SET") . "<br>";
        
        // Show array keys
        echo "<h3>Available Keys:</h3>";
        echo "Keys: " . implode(", ", array_keys($fruits)) . "<br>";

        // More on arrays
        $tasks = [
            "Laundary" => "Daniel", 
            "Trash" => "John", 
            "Dishes" => "Alice"
        ];
        echo "<pre>";
        print_r($tasks);
        echo "</pre>";

        echo count($tasks) . " tasks assigned.<br>";
        // sort($tasks); Will change array keys to numeric indices
        asort($tasks); // Sorts by values, maintaining key association
        echo "<h3>Sorted Tasks:</h3>";
        echo "<pre>";
        print_r($tasks);
        echo "</pre>";
        echo "Task Laundary is assigned to: " . $tasks["Laundary"] . "<br>";

        $tasks["new task"] = "New Person"; // Adding a new task
        print_r($tasks);

        // Adding data in between
        array_splice($tasks, 2, 0, ["Mid Task" => "Mid Person"]);
        array_splice($fruits, 2, 0, "kiwi");
        print_r($tasks);
        print_r($fruits);

        // Multidimensional arrays
        $food = [
            // array("apple", "mango"),
            ["apple", "mango"],
            "banana",
            "cherry"
        ];
        echo $food[0][0];
    ?>
    
</body>
</html>