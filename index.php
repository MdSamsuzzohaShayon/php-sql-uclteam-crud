<?php

use mysql_xdevapi\Result;

require_once 'include/db.php';
//https://www.php.net/manual/en/ref.mysql.php
$query = "SELECT * FROM `movies`";
//https://www.php.net/manual/en/function.mysql-query.php
$result = mysqli_query($conn, $query);
//https://www.php.net/manual/en/function.mysql-fetch-array.php
//https://www.php.net/manual/en/function.mysql-fetch-row.php
//https://www.php.net/manual/en/mysqli-result.num-rows.php
$records = mysqli_num_rows($result);

$msg = "";
if(!empty($_GET['msg'])){
    $msg = $_GET['msg'];
    $alet_msg = ($msg == "add") ? "New record has been added successfully" : "Record has been updated successfully";
}else{

}

?>

<!doctype html>
<html lang="en">
<?php include('partials/head.php'); ?>

<body>

<?php include('partials/nav.php') ?>

<br><br><br><br>
<div class="container">
    <table class="table shadow bg-secondary text-white">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Movie</th>
            <th scope="col">Director</th>
            <th scope="col">Revenue(USD)</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
//        echo "time to check the if condition";
            if(!empty($records)){
//                echo "-record is not empty";
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['movie']; ?></td>
                            <td><?php echo $row['director']; ?></td>
                            <td><?php echo $row['revenue']; ?>m</td>
                            <td>
                                <a href="/php-sql-crud/add.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="/php-sql-crud/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                }
            }
        ?>
        </tbody>
    </table>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>