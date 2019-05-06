<?php

$mysqli = new mysqli('localhost', 'shayon', 'Shayon1234', 'ucl_club') or die(mysqli_error($mysqli));

// CHECKING SAVE BUTTON PRESS OR NOT
if (isset($_POST['save'])) {
    # code...
    $name = $_POST['name'];
    $club = $_POST['club'];

    // MAKING QUERY
    $mysqli->query("INSERT INTO data(name , club) VALUES('$name', '$club')") or die($mysqli->error);
}


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
}