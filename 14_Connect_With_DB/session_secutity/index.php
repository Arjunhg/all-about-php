<!-- 

| Vulnerability          | Description                                         | Example Attack                      | Prevention                        |
| ---------------------- | --------------------------------------------------- | ----------------------------------- | --------------------------------- |
| **Session Sniffing**   | Attacker listens to traffic and captures session ID | Intercepting HTTP traffic           | Use **HTTPS**, `Secure` flag      |
| **Session Prediction** | Attacker guesses a weak session ID                  | Try IDs like `session=1234`         | Use strong, random IDs            |
| **Session Fixation**   | Attacker forces victim to use a known session ID    | `https://site.com?PHPSESSID=abc123` | Regenerate session ID after login |
| **XSS + Cookie Theft** | Attacker steals session via injected script         | `document.cookie` leakage           | Use `HttpOnly`, sanitize output   |


-->

<?php

    require_once 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>