<?php
    //Retrurns: all good    => 0
    //          bad email   => 1
    //          bad passwd  => 2
    function login($email, $passwd){
        $passwords = open_pwds();
        if(!isset($passwords[$email])) return 1;
        if($passwords[$email] == $passwd) return 0;
        return 2;
    }

    function open_pwds(){
        if(file_exists('password.txt')){
            $password_file = fopen('password.txt', 'r');
            while(!feof($password_file)){
                $line = explode('*', decrypt(fgets($password_file)));
                if (isset($line[1]))$return_arr[$line[0]] = $line[1];
            }
        }
        return $return_arr;
    }

    function decrypt($secret){
        $decrypted = '';
        global $KEY_ARRAY;
        for ($i=0; $i < strlen($secret) - 1; $i++) { 
            $decrypted .= chr((ord(substr($secret, $i)) - $KEY_ARRAY[$i % 5])  % 127);
        }
            
        return $decrypted;
    }

    $KEY_ARRAY = [
        0 => 5,
        1 => -14,
        2 => 31,
        3 => -9,
        4 => 3,
    ]
?>