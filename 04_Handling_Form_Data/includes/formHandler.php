<!-- When making pure php file, don't include close php tag -->
<?php 

// var_dump($_SERVER["REQUEST_METHOD"]);

// if(isset($_POST["submit"])){} can do this too and the button component should have a name attribute as name="submit" but this is not recommened approach

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // $firstName = $_POST["firstName"]; since we are directly accessing what user wrote it is prone to XSS attacks, so we should sanitize the input.

    $firstName = htmlspecialchars($_POST["firstName"]); //converts to html entities.
    $lastName = htmlspecialchars($_POST["lastName"]); 
    $favouritePet = htmlspecialchars($_POST["favouritePet"]); 

    if(empty($firstName)){
        header("Location: ../index.php?error=emptyFirstName");
        exit();
    }

    // Now we have user data and can do some stuff with it.

    echo "These are the data that user submitted: ";
    echo "<br>"; //can use php break line too as: \r\n
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br>";
    echo "Favourite Pet: " . $favouritePet . "<br>";

    // Since this page is only for handling form data (for developers only), we can redirect the user back to the main page after processing the data.
    header("Location: ../index.php?success=true"); // Redirects to index.php with a success query parameter.
}
else {
    header("Location: ../index.php");
}