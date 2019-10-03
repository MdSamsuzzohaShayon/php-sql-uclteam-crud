<?php require("./templates/header.php"); ?>
<?php require("./templates/component.php");?>
<?php
require('./config/db.php');

//SAVING MOVIE NAME TO DATABASE
if(isset($_POST['movie'])){

    $movie = mysqli_real_escape_string($GLOBALS['conn'], "movie");
    $director = mysqli_real_escape_string($GLOBALS['conn'], "director");
    $charecters = mysqli_real_escape_string($GLOBALS['conn'], "character");
    $revenue = mysqli_real_escape_string($GLOBALS['conn'], "revenue");

    if($movie && $director && $charecters && $revenue){
        $sql = "
            INSERT INTO cartoon_movie(movie, director, charecters, revenue)
            VALUES ($movie, $director, $charecters, $revenue);
        ";
        if(mysqli_query($GLOBALS['conn'], $sql)){
            echo "<div class='alert alert-success'>The record has been made successfully</div>";
        }else{
            echo "<div class='alert alert-danger'>Data is not recording. please fill the form properly</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>There is some problem with data</div>";
    }
}

?>

<br><br><br><br>
<div class="container">
    <form action="" method="post" class="shadow">
        <?php formElelemt("movie", "text", "Enter your favorite movie"); ?>
        <?php formElelemt("director", "text", "Director name of that movie"); ?>
        <?php formElelemt("character", "text", "List of character from that movie"); ?>
        <?php formElelemt("revenue", "text", "Gross income of that movie"); ?>
        <button class="btn btn-dark btn-block" type="submit">Submit</button>
    </form>
</div>


<?php require("./templates/footer.php"); ?>

