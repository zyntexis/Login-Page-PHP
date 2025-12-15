<?php

session_start();

function error_handler()
{
    if (isset($_SESSION["login_error"])) {
        echo "<p class='login-error'>" . $_SESSION["login_error"] . "</p>";
        unset($_SESSION["login_error"]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Login</h1>
        <form action="login.php" method="post" class="login-form">
            <div class="username">
                <input type="text" name="username" id="username" placeholder="Username ..." required>
            </div>

            <div class="password">
                <input type="password" name="password" id="password" placeholder="password ..." required>
            </div>

            <input type="submit" value="LOGIN">
        </form>

        <?= error_handler() ?>
    </main>
</body>

</html>