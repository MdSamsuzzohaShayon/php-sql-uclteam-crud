<?php

//ASSIGNING VARIABLES FOR CREATING DB
$server = '127.0.0.1';
$user = 'root';
$password = '1234';
$dbname = 'cartoon_movie';
//    CREATE NEW CONNECTION FOR MY SQL
//    THREE PARAMETERS
$conn = mysqli_connect($server, $user, $password);

//    CHECK CONNECTION
if(!$conn){
    echo "
        <div class='alert alert-danger'>Connection failed</div>
    ";
//    die("Connection failed". mysqli_connect_error());
}else{
    echo "<div class='alert alert-success'>There is no problem with connection</div>";
}



//CREATE DATABASE QUERY
$sql = "CREATE DATABASE IF NOT EXIST $dbname";

if(mysqli_query($conn, $sql)){
//    HERE IS FOUR PARAMETERS BECAUSE WE ARE CONNECTING
    $conn = mysqli_connect($server, $user, $password, $dbname);

//    CREATE SQL TABLE THOUGH SQL SCRIPT
    $sql = "
        CREATE TABLE IF NOT EXISTS movies(
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            movie VARCHAR (25) NOT NULL ,
            director VARCHAR (20),
            charecters VARCHAR (25),
            revenue FLOAT 
        );
    ";

    if(mysqli_query($conn, $sql)){
        echo "<div class='alert alert-success'>DB Connection has been made successfully</div> ";
        return $conn;
    }else{
        echo "Can't create table" . mysqli_error();
    }
}else{
    echo "<div class='alert alert-danger'>Error while creating database</div> ";
    echo "Error while creating database" . mysqli_error();
}