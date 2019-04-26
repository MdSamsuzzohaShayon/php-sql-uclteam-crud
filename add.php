<?php 
   //https://www.php.net/manual/en/function.isset.php
    // isset — Determine if a variable is declared and is different than NULL
    /*if(isset($_GET["submit"])){
        echo $_GET["email"];
        echo $_GET["title"];
        echo $_GET["ingredients"];
    }*/


    if(isset($_POST["submit"])){
        echo $_POST["email"];
        echo $_POST["title"];
        echo $_POST["ingredients"];
    }
?>

<?php include("templates/header.php"); ?>
<section class="container grey-text">
    <h2 class="center">Add a team</h2>
    <form action="add.php" method="POST" class="white">
        <label>Your mail: </label>
        <input type="text" name="email">

        <label>Team title: </label>
        <input type="text" name="title">

        <label>Ingredients (comma separated): </label>
        <input type="text" name="ingredients">
        <div class="center">
        <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include("templates/footer.php");?>