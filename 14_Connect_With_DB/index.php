<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Sign-Up</h3>

    <form action="includes/formaHandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="pwd" placeholder="Password" required />
        <input type="email" name="email" placeholder="Email" required />
        
        <button type="submit">Sign Up</button>
    </form>

    <h3>Change Account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="pwd" placeholder="Password" required />
        <input type="email" name="email" placeholder="Email" required />
        
        <button type="submit">Update</button>
    </form>

    <h3>Delete Account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="pwd" placeholder="Password" required />
        
        <button type="submit">Delete</button>
    </form>

    <h3>Search</h3>
    <form action="search.php" method="post">
        <label for="search">Seach for User: </label>
        <input type="text" name="search" id="search" placeholder="Search for User" required />
        <button type="submit">Search</button>
    </form>

</body>
</html>