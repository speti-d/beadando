<?php
    function get_bg_color($email){
        $conn = make_connection();
        $sql = "SELECT Titkos FROM tabla WHERE Username LIKE '$email';";
        $result = $conn->query($sql);
        return mysqli_fetch_row($result)[0];
    }

    function make_connection(){
        $conn = new mysqli("localhost", "root", "", "adatok");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
?>