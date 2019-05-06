<?php

session_start();

$mysqli = new mysqli('localhost', 'shayon', 'Shayon1234', 'ucl_club') or die(mysqli_error($mysqli));

$name ='';
$club = '';
$update = false;
$id = 0;

// CHECKING SAVE BUTTON PRESS OR NOT
if (isset($_POST['save'])) {
    # code...
    $name = $_POST['name'];
    $club = $_POST['club'];


    // MAKING QUERY
    $mysqli->query("INSERT INTO data(name , club) VALUES('$name', '$club')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "green";

    // REDIRECT PAGE
    header("location: index.php");
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been Deleted!";
    $_SESSION['msg_type'] = "red";
    header("location: index.php");
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    if (count($result) == 1) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $club = $row['club'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $club = $_POST['club'];

    $mysqli->query("UPDATE data SET name='$name', club='$club' WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "green";

    header("location: index.php");

}
