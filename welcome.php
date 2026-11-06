<?php
    session_start();
    // Not logged in? Send them to the login page before any HTML is output.
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
</head>
<body>
<?php include "header.inc"; ?>

<main>
<?php
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION["user"]) . "</h2>";
    echo "<p>Your token is " . htmlspecialchars($_SESSION["token"]) . ".</p>";
?>
</main>

<?php include "footer.inc"; ?>
</body>
</html>
