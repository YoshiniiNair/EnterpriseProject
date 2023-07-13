<?php

    $servername = 'localhost';  
    $username = 'root';  
    $password = '';
    $dbname = 'clubify';
    
    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(mysqli_connect_errno()){
        die('Failed to connect with MySQL: '. mysqli_connect_error());  
    }

    /*
    // DB credentials.
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','clubify');

    //create connection 2
    try{
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }catch (PDOException $e){
        exit("Error: " . $e->getMessage());
    }
    */
?>