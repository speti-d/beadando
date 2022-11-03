<?php
    function login($email, $passwd){
        $sajt = 'rak';
        if(file_exists('password.txt')){
            $password_file = fopen('password.txt', 'r');
            $sajt = '';
            while(!feof($password_file)){
                $sajt .= fgets($password_file);
            }
        }
        return $sajt;
    }
?>