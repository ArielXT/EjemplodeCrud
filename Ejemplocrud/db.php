<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "semana6";
    $MySQLiconn = new MySQLi($servername,$username,$password,$db);
    
    if($MySQLiconn->connect_errno){
        die("ERROR : ->".$MySQLiconn->connect_error);
    }
?>