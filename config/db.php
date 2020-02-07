<?php

    $conn = new mysqli('127.0.0.1', 'shayon', 'Shayon1234', 'players_crud');

    if($conn->connect_errno){
        echo htmlspecialchars(" Failed to connect MySql Db : (" . $conn->connect_errno . ")" . $conn->connect_error)  ;
        exit();
    }
    // else{
    //     echo htmlspecialchars("Db Connection has been made successfully");
    // }

?>
