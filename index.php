<?php
    require_once("./php/component.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="whole">
    <div class="ui menu inverted blue">
        <div class="ui container">
            <h1 class="ui header aligned center item"><i class="book icon"></i> Hello PHP</h1>
        </div>
    </div>
    <div class="ui container">
        <form action="" class="ui equal width form">
            <div class="fields">
                <div class="field">
                    <label for="id" class="ui blue header huge">Enter your ID Number</label>
                    <div class="ui right labeled input">
                        <label for="id" class="ui label"><i class="id card icon"></i></label>
                        <input type="text" placeholder="ID" id="id">
                    </div>
                </div>
                <?php inputElement(); ?>
            </div>
        </form>
    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>