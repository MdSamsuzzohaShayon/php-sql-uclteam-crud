<?php
require_once 'include/db.php';


if(isset($_POST['submit']) && $_POST['submit'] != ''){
//    echo "<pre>"; print_r($_POST); die;





    $movie = (!empty($_POST['movie'])) ? $_POST['movie'] : '';
    $director = (!empty($_POST['director'])) ? $_POST['director'] : '';
    $revenue = (!empty($_POST['revenue'])) ? $_POST['revenue'] : '';
    $id = (!empty($_POST['movie_id'])) ? $_POST['movie_id'] : '';

    if(!empty($id)){
//        UPDATE RECORD
        $movie_query = "UPDATE `movies` SET movie='".$movie."', director='".$director."', revenue='".$revenue."' WHERE id='".$id."'";
    }else{
//        INSERT RECORD
        $movie_query = "INSERT INTO `movies` (movie, director, revenue) VALUES 
        ('".$movie."', '".$director."', '".$revenue."')";
    }




    $result = mysqli_query($conn, $movie_query);
    if($result){
        echo "<br> Record has been saved"; die;
    }
}

if(isset($_GET['id']) && $_GET['id'] != ''){
    $movie_id = $_GET['id'];
    $movie_query = "SELECT * FROM `movies` WHERE id='".$movie_id."'";
    $movie_res = mysqli_query($conn, $movie_query);
    $result = mysqli_fetch_row($movie_res);
//    echo "<pre>"; print_r($result);
    $movie = $result[1];
    $director = $result[2];
    $revenue = $result[3];
}else{
    $movie = "";
    $director = "";
    $revenue = "";
    $movie_id = "";
}

?>

<!doctype html>
<html lang="en">
<?php include('partials/head.php'); ?>
<body>
<?php include('partials/nav.php') ?>
<br><br>
<div class="container">
    <form method="POST" action="" >
        <div class="form-row">
            <div class="col">
                <label for="movie" class="text-success">Enter the name of the movie</label>
                <input type="text" name="movie" value="<?php echo $movie; ?>" class="form-control shadow" placeholder="Enter the name of the movie">
            </div>
            <div class="col">
                <label for="director" class="text-success">Enter the name of that movie director</label>
                <input  value="<?php echo $director; ?>" type="text" name="director" class="form-control shadow" placeholder="Enter the name of that movie director">
            </div>
            <div class="col">
                <label for="revenue" class="text-success">Total gross income</label>
                <input  value="<?php echo $revenue; ?>" type="text" name="revenue" class="form-control shadow" placeholder="Total gross income">
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
            <input type="submit" name="submit" class="btn btn-success btn-block shadow" value="Submit" />
        </div>
    </form>
</div>

</body>
</html>
