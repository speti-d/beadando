<?php
    if($_POST['e-mail'] != '' and $_POST['passwrd'] != '')
    {
        $sajt = 'gyasz';
        if(file_exists('password.txt')){
            $password_file = fopen('password.txt', 'r');
            $sajt = '';
            while(!feof($password_file)){
                $sajt .= fgets($password_file);
            }
        }
    }
?>