<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Sign-Up</h3>

    <form action="includes/formHandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="pwd" placeholder="Password" required />
        <input type="email" name="email" placeholder="Email" required />
        
        <button type="submit">Sign Up</button>
    </form>

</body>
</html>