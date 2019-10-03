<?php
$conn = new mysqli('localhost', 'root','1234', 'cartoon_movie');
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
echo $conn->host_info . "\n";


session_start();

if(isset($_POST['save'])){
    if (!empty($_POST['movie']) && !empty($_POST['director']) && !empty($_POST['revenue'])){

        $movie = $_POST['movie'];
        $director = $_POST['director'];
        $revenue= $_POST['revenue'];


//        SQL
        $iQuery = "INSERT INTO movies(movie, director, revenue) values (?, ?, ?)";

        $stmt = $conn->prepare($iQuery);
//        https://www.php.net/manual/en/mysqli-stmt.bind-param.php
        $stmt->bind_param("sss", $movie, $director, $revenue );

        if($stmt->execute()){
            $_SESSION['msg'] = "New Record is successfully inserted";
            $_SESSION['alert'] = "alert alert-success";
        }
        $stmt->close();
        $conn->close();
    }else{
        $_SESSION['msg'] = "You must fill all boxes";
        $_SESSION['alert'] = "alert alert-warning";
    }
    header("location: index.php");
}


?>
