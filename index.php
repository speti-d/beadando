<?php
    require 'passwd.php';
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webfejl. Beadando</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="e-mail">E-mail:</label>
        <input type="email" name="e-mail" id="e-mail"><br>
        <label for="passwrd">Password:</label>
        <input type="password" name="passwrd" id="passwrd"><br>
        <input type="submit" value="Bejelentkezés">
    </form>
    <?php
        echo $sajt;
    ?>
</body>
</html>