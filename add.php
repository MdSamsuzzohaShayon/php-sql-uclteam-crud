<?php

if(isset($_POST['submit']) && $_POST['submit'] != ''){
//    echo "<pre>"; print_r($_POST); die;

//    THIS IS PERFECT WE REQUIRE FILE HERE. DON'T NEED REQUIRE OUTSIDE OF IF STATEMENT
    require_once 'include/db.php';



    $movie = (!empty($_POST['movie'])) ? $_POST['movie'] : '';
    $director = (!empty($_POST['director'])) ? $_POST['director'] : '';
    $revenue = (!empty($_POST['revenue'])) ? $_POST['revenue'] : '';

    $movie_query = "INSERT INTO `movies` (movie, director, revenue) VALUES 
    ('".$movie."', '".$director."', '".$revenue."')";

    $result = mysqli_query($conn, $movie_query);
    if($result){
        echo "<br> Record has been saved"; die;
    }
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
                <input type="text" name="movie" class="form-control shadow" placeholder="Enter the name of the movie">
            </div>
            <div class="col">
                <label for="director" class="text-success">Enter the name of that movie director</label>
                <input type="text" name="director" class="form-control shadow" placeholder="Enter the name of that movie director">
            </div>
            <div class="col">
                <label for="revenue" class="text-success">Total gross income</label>
                <input type="text" name="revenue" class="form-control shadow" placeholder="Total gross income">
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success btn-block shadow" value="Submit" />
        </div>
    </form>
</div>

</body>
</html>
