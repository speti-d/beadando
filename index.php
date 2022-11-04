<?php
    require 'passwd.php';
    require 'database.php';
    $bgColor = 'aqua;';
    $goToPolice = false;
    if(isset($_POST['e-mail']) and isset($_POST['passwrd']) and $_POST['e-mail'] != '' and $_POST['passwrd'] != '')
    {
        switch (login($_POST['e-mail'], $_POST['passwrd'])) {
            case 0:
                $bgColor = get_bg_color($_POST['e-mail']);
                break;
            case 1:
                $errMsg = 'nincs ilyen felhasználó';
                break;
            case 2:
                $errMsg = 'hibás jelszó';
                $goToPolice = true;
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Webfejl. Beadando</title>
</head>
<?php
echo "<body style='background-color: $bgColor'>"
?>
    <main>
    <form action="index.php" method="post">
        <div>
            <label for="e-mail">E-mail:</label>
            <input type="email" name="e-mail" id="e-mail" required><br>
        </div>
        <div>
            <label for="passwrd">Password:</label>
            <input type="password" name="passwrd" id="passwrd" required><br>
        </div>
        <div>
            <input type="submit" value="Bejelentkezés">
        </div>
    <?php
        if(isset($errMsg)) echo "<span>$errMsg</span>";
        if($goToPolice) echo '<script src="police_time.js"></script>'
    ?>
    </form>
    </main>
</body>
</html>