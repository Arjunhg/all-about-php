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

        $bool = true;
        $a = 1;
        $b = 4;

        // If-Else Statement
        if($a < $b && !$bool){
            echo "First condition is true" . "<br>";
        } else if($a > $b && $bool){
            echo "Second condition is true" . "<br>";
        } else {
            echo "No condition is true" . "<br>";
        }

        // Switch Statement: For checking specific values
        switch($a){
            case 1:
                echo "The first case is true" . "<br>";
                break;
            case 3:
                echo "The second case is true" . "<br>";
                break;
            default:
                echo "No case is true" . "<br>";
                break;
        }

        // match expression (PHP 8.0+)
        $result = match($a){ //does strict comparison
            1 => "Variable a is 1",
            2 => "Variable a is 2",
            3, 4, 5 => "Variable a is 3, 4, or 5",
            default => "Variable a is not 1 or 2"
        }; // Note colon is needed at end
        echo $result . "<br>";
    ?>
    
</body>
</html>