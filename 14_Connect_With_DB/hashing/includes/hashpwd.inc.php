<?php

    /*
        $sensitiveDate = 'John';
        $salt = bin2hex(random_bytes(16)); // Generate a random salt. Convert binary data to hexadecimal representation.
        $pepper = 'ASecretPepper'; // A secret pepper that is not stored in the database, but used in hashing.

        // echo "<br>" . $salt;

        $dataToHash = $sensitiveDate . $salt . $pepper; // Combine sensitive data with salt and pepper.
        $hash = hash('sha256', $dataToHash); // Hash the combined data using SHA-256.

        // echo "<br>" . $hash;

        /*-------

        $sensitiveDate = 'John';

        $storedHash = $hash;
        $storedSalt = $salt; 
        $pepper = 'ASecretPepper'; 

        $dataToHash = $sensitiveDate . $storedSalt . $pepper;

        $verificationHash = hash("sha256", $dataToHash); 

        if($storedHash === $verificationHash){
            echo "The hash matches. The sensitive data is verified.";
            echo "<br>";
            echo $storedHash;
            echo "<br>";
            echo $verificationHash;
        } else {
            echo "The hash does not match. The sensitive data is not verified.";
        }

    */

// The above code is what you would do to hash a sensitive non password data.
// The following code is what you would do to hash a password.

    $pwdSignup = "John";

    // password_hash($pwd, PASSWORD_DEFAULT); // Salt and Pepper are automatically handled by PHP's password_hash function.

    $options = [
        'cost' => 12 // Default is 10
    ];

    $hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); // Hash the password using bcrypt with a cost factor of 12.


    $pwdLogin = "John";
    // passowrd_verify($pwdLogin, $hashedPwd); // Verify the password against the hashed password.

    if(password_verify($pwdLogin, $hashedPwd)){
        echo "The password matches. The user is verified.";
        echo "<br>";
        echo $hashedPwd;
    } else {
        echo "The password does not match. The user is not verified.";
    }
    