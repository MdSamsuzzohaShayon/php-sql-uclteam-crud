<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "crud_db";


$conn = mysqli_connect($host, $user, $password, $dbname);
if ($conn) {
?>
    <script>
        console.log("Connection successfull");
    </script>
<?php
} else {
?>
    <script>
        console.log("No Connection");
    </script>
<?php
}
?>