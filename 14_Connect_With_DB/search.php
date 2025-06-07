<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $search = $_POST["search"];

        try {
            require_once "includes/dbh.inc.php";

            $query = "SELECT * FROM comments WHERE username=:search";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":search", $search);

            $stmt->execute();

            // Take statement that we sent and executed and point it to method. Then we fetch data as associate array where column name would be associate key
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null;
            $stmt = null;

        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    } else {
        header("Location: index.php?error=invalidrequest");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <section>
        <h3>Search Result: </h3>

        <?php
            if(empty($result)){
                echo "<div>";
                echo "<p>There were no results!</p>";
                echo "</div>";
            } else {
                // var_dump($result);
                foreach ($result as $row) {
                    // Since we are outputting data into our website from database we must sanitize it to preven anu XSS attack. And since we are outputting string htmlspecialchars is good for this.
                    echo "<div>";
                    echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                    echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
                    echo "p" . htmlspecialchars($row["created_at"]) . "</p>";
                    echo "</div>";
                }
            }
        ?>
    </section>

</body>
</html>