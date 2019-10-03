<!--https://www.youtube.com/watch?v=MccPSNL_VzU-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartoon Crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="fullpage">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Cartoon Crud</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <form action="crudquery.php" method="post" class="bg-dark p-3 shadow">
            <div class="form-row form-group">
                <?php formElement('movie', 'text', 'Enter name of a movie'); ?>
                <?php formElement('director', 'text', 'Enter director name of that movie'); ?>
                <?php formElement('revenue', 'text', 'Gross income of that movie'); ?>
            </div>
            <div class="form-group">
                <button class="btn btn-secondary btn-block" type="submit" name="save">Save</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>

<?php
function formElement($name, $type, $placeholder)
{
    $element = "
    <div class=\"col\">
                <label for=\"$name\" class='text-white'>$placeholder</label>
                <input type=\"$type\" class=\"form-control\" name=\"$name\" id=\"$name\"
                       placeholder=\"$placeholder\">
            </div>
    ";
    echo $element;
}

?>