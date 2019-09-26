<?php
    require_once("./php/component.php");
    require_once ('./php/operation.php');
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
            <h1 class="ui header aligned center item"><i class="book icon"></i> Bookshop</h1>
        </div>
    </div>
    <br><br><br>
    <div class="ui container">
        <form action="" class="ui equal width form">
            <div class="fields">
                <?php inputElement('<i class="address book outline icon"></i>', 'Enter Your Book Name', 'book_name', ''); ?>
            </div>
            <div class="fields">
                <?php inputElement('<i class="id badge outline icon"></i>', 'Enter Your ID Number', 'book_id', ''); ?>
                <?php inputElement('<i class="user secret icon"></i>', 'Enter The Name Of Publisher', 'book_publisher', ''); ?>
                <?php inputElement('<i class="dollar sign icon"></i>', 'Price of the Book', 'book_price', ''); ?>
            </div>
            <div class="fields">
                <?php buttonElement("btn-create", "ui animated button blue fluid", 'Create', "create", '<i class="plus icon"></i>'); ?>
                <?php buttonElement("btn-read", "ui animated button blue fluid", 'Read', "read", '<i class="sync icon"></i>'); ?>
                <?php buttonElement("btn-update", "ui animated button blue fluid", 'Update', "update", '<i class="arrow alternate circle down icon"></i>'); ?>
                <?php buttonElement("btn-delete", "ui animated button blue fluid", 'Delete', "delete", '<i class="trash alternate outline icon"></i>'); ?>
            </div>
        </form>
        <br><br>
        <table class="ui blue table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Publisher</th>
                <th>Book Price</th>
                <th>Edit</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>Harry Potter</td>
                <td>Rolling</td>
                <td>99.99</td>
                <td><i class="edit outline icon"></i></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Harry Potter</td>
                <td>Rolling</td>
                <td>99.99</td>
                <td><i class="edit outline icon"></i></td>
            </tr>
            </tbody>
        </table>

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>