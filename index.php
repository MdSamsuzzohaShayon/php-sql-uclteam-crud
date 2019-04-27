<?php 
    // CONNECT TO DB
    // https://php.net/manual/en/function.mysqli-connect.php
    $conn = mysqli_connect('localhost', 'shayon', 'Shayon1234', 'ucl_club');
    
    // CHECK FOR CONNECTION
    if(!$conn){
        // IF ANYTHING WENT WRONG IT WILL PRINT THE ERROR
        echo 'Connection error' . mysqli_connect_error();
    }
?>


<?php include("templates/header.php"); ?>
<?php include("templates/footer.php"); ?>
