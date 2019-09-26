<?php

function createDB(){
    $servername = '127.0.0.1';
    $username = 'root';
    $password = '1234';
    $dbname = 'bookstore';

//    CREATE NEW CONNECTION FOR MY SQL
    $con = mysqli_connect($servername, $username, $password);

//    CHECK CONNECTION
    if(!$con){
        die("Connection Field" . mysqli_connect_error());
    }
//    CREATE DATABASE THOUGH SQL SCRIPT
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

//    CONNECTING TO THE DATABASE
    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

//        CREATE SQL TABLE THOUGH SQL SCRIPT
        $sql = "
            CREATE TABLE IF NOT EXISTS books(
                id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_name VARCHAR (25)NOT NULL,
                book_publisher VARCHAR (20),
                book_price FLOAT
            );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Can not create table";
        }
    }else{
        echo "Error while creating database" . mysqli_error($con);
    }

}
