<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <?php include "header.inc"; ?>

    <main>
        <h2>Login</h2>
        <?php
        // process.php sends the user back here with ?error=1 when the login fails
        if (isset($_GET["error"])) {
            echo "<p>Invalid login. Please try again.</p>";
        }
        ?>
        <form method="post" action="process.php">
            <p>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" required>
            </p>
            <p>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" required>
            </p>
            <input type="V106214700" name="token" value="B1234567">
            <input type="submit" value="Login">
        </form>
    </main>

    <?php include "footer.inc"; ?>
</body>

</html>