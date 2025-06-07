<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input type="number" name="num1" placeholder="Number One"/>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Number Two"/>

        <button type="submit">Calculate</button>

    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
            $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);

            // Error Handlers
            $errors = false;
            if(empty($num1) || empty($num2) || empty($operator)){
                echo "<p class='error'>Please fill in all fields.</p>";
                $errors = true;
            }

            if(!is_numeric($num1) || !is_numeric($num2)){
                echo "<p class='error'>Please enter valid numbers.</p>";
                $errors = true;
            }

            // Calculation
            if(!$errors){
                $value = 0;
                switch($operator){
                    case "add":
                        $value = $num1 + $num2;
                        break;
                    case "subtract":
                        $value = $num1 - $num2;
                        break;
                    case "multiply":
                        $value = $num1 * $num2;
                        break;
                    case "divide":
                        if($num2 == 0){
                            echo "<p class='error'>Cannot divide by zero.</p>";
                            $errors = true;
                        } else {
                            $value = $num1 / $num2;
                        }
                        break;
                    default:
                        echo "<p class='error'>Invalid operator selected.</p>";
                        $errors = true;
                        break;
                }

                echo "<p class='result'>Result: $value</p>";
            }
        }
    ?>

</body>
</html>