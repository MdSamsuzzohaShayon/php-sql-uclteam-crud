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
    <?php require_once 'process.php'; ?>
    <div class="landing">
        <div class="ui container">
            <br><br>
            <!-- TABLE BEGAIN -->
            <?php
            // CONNECT TO DB
            $mysqli = new mysqli('localhost', 'shayon', 'Shayon1234', 'ucl_club') or die(mysqli_error($mysqli));

            // MAKING QUERY
            $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);

            // DETAILS
            // pre_r($result);

            // DATA
            // pre_r($result->fetch_assoc());

            ?>


            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Club</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['club']; ?></td>
                            <td></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>


            <?php

            // SHOW DATA
            function pre_r($array)
            {
                echo '<div>';
                print_r($array);
                echo '</div>';
            }

            ?>
            <!-- TABLE ENDING -->

            <br>
            <br>
            <br>

            <!-- FORM BEGAIN -->
            <form action="process.php" method="POST" class="ui form">
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
                <button type="submit" name="save" class="ui huge green fluid button">Save</button>
            </form>
            <!-- FORM ENDING -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>

</html>