<?php 

    // Preventing session fixation attacks
    ini_set('session.use_only_cookies', 1); // Use cookies only for session management

    // Making sure the website uses only the session id created by the server. It also helps in making it harder for attackers to guess session IDs.
    ini_set('session.use_strict_mode', 1); 

    // Making cookie parameters: So whenever we start a session and cookie is created we can set the parameters for the cookie to make it more secure
    session_set_cookie_params([
        'lifetime' => 1800, // Cookie lifetime in seconds (30 minutes)
        'domain' => 'localhost',
        'path' => '/', //Any path on the server
        'secure' => true, // Only send cookie over HTTPS
        'httponly' => true, // Prevent JavaScript access to the cookie
    ]);

    session_start(); // Start the session with the secure cookie parameters

    // Regenerate Session ID to prevent session fixation and prediction attacks
    // session_regenerate_id(true);  // Regenerate the current session ID into a better one.

    // A better way to implement regenerate is to keep calling it on regular intervals, so that if attacker does get a session ID, it will be invalidated after a certain time.
    if(!isset($_SESSION['last_regeneration'])){

        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time(); // Store the time of the last regeneration for future checks which goes to else block

    } else {

        $interval = 60*30; // 30 minutes in seconds

        if(time() - $_SESSION['last_regeneration'] >= $interval){

            session_regenerate_id(true);
            $_SESSION['last_regeneration'] = time(); // Update the last regeneration time

        }
    }