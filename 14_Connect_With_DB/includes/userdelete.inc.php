<?php 

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        try {

            require_once 'dbh.inc.php';

            $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
            // The username field is case-insensitive by default due to the collation (utf8_general_ci). To make it case-sensitive, update the collation to utf8_bin.

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':pwd', $pwd);

            $stmt->execute();

            $pdo = null;
            $stmt = null;

            header("Location: ../index.php");
            die();

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    } else {
        header("Location: ../index.php?error=invalidrequest");
        exit();
    }