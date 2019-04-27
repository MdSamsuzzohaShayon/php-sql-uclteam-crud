<?php 
    // CONNECT TO DB
    // https://php.net/manual/en/function.mysqli-connect.php
    $conn = mysqli_connect('localhost', 'shayon', 'Shayon1234', 'ucl_club');
    
    // CHECK FOR CONNECTION
    if(!$conn){
        // IF ANYTHING WENT WRONG IT WILL PRINT THE ERROR
        echo 'Connection error' . mysqli_connect_error();
    }

    // RIGHT QUERY FOR ALL PLAYERS
    // $sql = 'SELECT * FROM team'; // GET ALL COLUMNS

    // GET PARTICULAR COLUMNS
    $sql = 'SELECT title, players, id FROM team';

    //  MAKE QUERIES AND GET THE RESULTS
    $result = mysqli_query($conn, $sql);

    // FETCH THE RESULTING ROWS AS AN ARRAY
    $team = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //FREE RESULT FROM MEMORY
    mysqli_free_result($result);

    // CLOSE CONNECTIONS
    mysqli_close($result);

    print_r($team);
?>


<?php include("templates/header.php"); ?>
<?php include("templates/footer.php"); ?>
