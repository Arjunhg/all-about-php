<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handler - PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <!-- 
            If we want to send data to the same page, we can use:
            action="< ?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
            However, this is not recommended as it can be prone to XSS attacks if not properly escaped.
            It's better to use a separate handler file like we're doing below.
        -->        <form action="includes/formHandler.php" method="post">
            <div class="form-field">
                <label for="firstName">First-Name: </label>
                <input id="firstName" type="text" name="firstName" placeholder="John"/>
            </div>
            
            <div class="form-field">
                <label for="lastName">Last-Name: </label>
                <input id="lastName" type="text" name="lastName" placeholder="Doe"/>
            </div>
            
            <div class="form-field">
                <label for="favouritePet">Favourite Pet: </label>
                <select name="favouritePet" id="favouritePet">
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="fish">Fish</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>