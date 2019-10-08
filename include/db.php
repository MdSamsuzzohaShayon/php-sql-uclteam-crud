<?php

//https://www.php.net/manual/en/book.mysqli.php
$conn = mysqli_connect('localhost', 'root', '1234', 'cartoon_movie')  ;
if(!$conn){
    echo "Unable to connect to MySQL" . PHP_EOL;
    echo "Debugging Errno" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging Error" . mysqli_connect_error() . PHP_EOL;
    exit();
}


//echo "Success: A proper connection to Database: " . PHP_EOL;
//echo "<br> Host Information: " . mysqli_get_host_info($conn);
//echo "<br> Clint Information: " . mysqli_get_client_info();
//echo "<br> Connections Status: " . mysqli_get_connection_stats($conn);

//FETCHING DATA
//https://www.php.net/manual/en/ref.mysql.php