<?php include("templates/header.php");?>
<section class="container grey-text">
    <h2 class="center">Add a team</h2>
    <form action="add.php" method="GET" class="white">
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