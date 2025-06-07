<?php 

    /*
        - If we don't check the request method, we might allow unauthorized access to our form handler.
        - For example: without this check anyone can go to http://localhost/all-about-php/14_Connect_With_DB/includes/formaHandler.inc.php
          and submit data to our form handler, which could lead to unexpected behavior or security issues.
    */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];

        // Don't need to sanitize inputs here as we are not outputting them directly to the browser. Also later we will use prepared statements to prevent SQL injection.

        try {
            
            // Connect to the database
            require_once 'dbh.inc.php';
            /*
                - There are others as well like: require, include, include_once
                - The difference is:
                    - require: If the file is not found, it will throw a fatal error and stop the script execution.
                    - include: If the file is not found, it will throw a warning but the script will continue to execute.
                    - include_once: If the file is already included, it will not be included again.
                    - require_once: Similar to include_once, but it will throw a fatal error if the file is not found.
            */

            /*-- INSERTING DATA --*/
            // $query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);"; Not good practice to use variables directly in SQL queries as it can lead to SQL injection attacks.

            /*
             $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
             - This is Non-Named parameter in prepared statements. Values are bound to the placeholders in the order they appear in the query.
             - The question marks (?) are placeholders for the values that will be bound to the query later.
            */ 

            $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

            $stmt = $pdo->prepare($query);

            // $stmt->execute([$username, $pwd, $email]); //For non-named parameters. Using prepared statements to prevent SQL injection attacks.

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->bindParam(':email', $email);

            $stmt->execute();


            $pdo = null; // Close the database connection
            $stmt = null; // Close the statement

            // header("Location: ../index.php?signup=success");
            header("Location: ../index.php");
            die(); // Use die when there is connection and use exit when there is no connection. This is a good practice to stop the script execution after a redirect.


        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }else{
        header("Location: ../index.php?error=invalidrequest");
        exit();
    }