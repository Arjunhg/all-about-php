<?php 

    // DSN: Data Source Name
    $dsn = "mysql:host=localhost;port=3307;dbname=myfirstdatabase";
    $dbusername = "root";
    $dbpassword = "newpassword";

    try {

        $pdo = new PDO($dsn, $dbusername, $dbpassword); // We can use mysqli or PDO to connect to the database (PDO: PHP Data Objects)

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set the PDO error mode to exception

        // Insert using prepared statements: To prevent SQL injection attacks, we use prepared statements

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }