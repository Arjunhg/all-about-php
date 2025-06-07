<?php 

    // Initialize session
    session_start(); // Start the session

    // Section: Setting Session Variables
    $_SESSION['username'] = 'JohnDoe'; // Setting a session variable

    // Section: Optional Unsetting/Destroying Session Variables
    // Uncomment the following lines as needed:
    // unset($_SESSION['username']); // Unsetting a specific session variable
    // session_unset(); // Unsetting all session variables
    // session_destroy(); // Destroys the session on the server, but not on the client side

    session_destroy(); // Can't access username in example.php after this line

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management</title>
</head>
<body>

    <h1>Session Management Example</h1>

    <?php
        // Section: Displaying Session Variables
        if (isset($_SESSION['username'])) {
            echo "<p>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</p>";
        } else {
            echo "<p>No active session found.</p>";
        }
    ?>



    <footer>
        <h2>Session Management Notes</h2>
        <p><strong>session_unset():</strong> Removes all session variables but keeps the session ID (PHPSESSID) valid. The session itself is still usable, and new session variables can be set if needed.</p>
        <p><strong>session_destroy():</strong> Invalidates the session ID (PHPSESSID) but leaves session variables accessible in the current script until the script ends. The session is no longer usable in subsequent requests.</p>
        <p><strong>Key Points:</strong></p>
        <ul>
            <li>After <code>session_unset()</code>, the session ID remains active, and you can set new session variables.</li>
            <li>After <code>session_destroy()</code>, the session ID is invalidated, and the session cannot be used in subsequent requests. However, session variables remain accessible in the current script until it ends.</li>
        </ul>
    </footer>

</body>
</html>