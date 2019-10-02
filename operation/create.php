<?php require("../templates/header.php");?>
<?php require("../templates/component.php");?>

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
<?php require("../templates/footer.php");?>
