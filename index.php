<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        .landing {
            width: 100%;
            height: 100vh;
            background-image: url(nature_bird.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="landing">
        <br>
        <br>
        <br>
        <br>
        <div class="ui container">
            <form action="" method="post" class="ui form">
                <div class="two fields">
                    <div class="field">
                        <label for="name" class="ui pointing below label">Enter player name</label>
                        <input type="text" placeholder="name____" name="name">
                    </div>
                    <div class="field">
                        <label for="club" class="ui pointing below label">Enter club name</label>
                        <input type="text" placeholder="club____" name="club">
                    </div>
                </div>
                <br><br>
                <button type="submit" name="save" class="ui inverted huge green fluid button">Save</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>

</html>