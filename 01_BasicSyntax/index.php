<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>New Day</p>

    <?php 
        echo "Hello World!";
    ?>

    <p>New  <?php echo "World"; ?> Day</p>

    <!-- Not Recommended -->
    <?php
        if(true){
            echo "<h1>Some HTML Text</h1>";
        }
    ?>
    <!-- Recommended -->
    <?php 
        if(true){?>
            <h1>Some HTML Text</h1>
        <?php } //Should have whitespace before closing tag
    ?>
    <!-- PHP expects {} blocks to wrap some logical structure like if, while, function etc -->
</body>
</html>