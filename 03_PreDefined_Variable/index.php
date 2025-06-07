<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

    <!-- Pre-Defined Variables are called Super Globals -->
    <!-- Syntax: $_SUPERGLOBAL["KEY"]  -->
    <?php 
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
    ?>

    <br>

    <?php 
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["eye"];
        echo "<br>";
        echo $_REQUEST["name"]; //looks for GET, POST and COOKIE
    ?>

    <br>

    <?php
        echo $_FILES["name"];
        echo $_COOKIE["name"];

        $_SESSION["username"] = "John Doe Session";
        echo $_SESSION["username"];

        $_ENV["PATH"];
    ?>

</body>
</html>