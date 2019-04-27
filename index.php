<?php 

    /* 
    // CONNECT TO DB
    // https://php.net/manual/en/function.mysqli-connect.php
    $conn = mysqli_connect('localhost', 'shayon', 'Shayon1234', 'ucl_club');
    
    // CHECK FOR CONNECTION
    if(!$conn){
        // IF ANYTHING WENT WRONG IT WILL PRINT THE ERROR
        echo 'Connection error' . mysqli_connect_error();
    }
    */


    include('config/db_connect.php');

    // RIGHT QUERY FOR ALL PLAYERS
    // $sql = 'SELECT * FROM team'; // GET ALL COLUMNS

    // GET PARTICULAR COLUMNS
    $sql = 'SELECT title, players, id FROM team ORDER BY created_at';

    //  MAKE QUERIES AND GET THE RESULTS
    $result = mysqli_query($conn, $sql);

    // FETCH THE RESULTING ROWS AS AN ARRAY
    $team = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //FREE RESULT FROM MEMORY
    mysqli_free_result($result);

    // CLOSE CONNECTIONS
    mysqli_close($conn);

    // print_r($team);

    // SPLITE IN THE STRING WITH EXPLODE FUNCTION
    // https://www.php.net/manual/en/function.explode.php
    // print_r(explode(',', $team[0]['players']));
    
?>


<?php include("templates/header.php"); ?>
    <h4 class="center grey-text">Players</h4>
    <div class="container">
        <div class="row">
            <?php foreach($team as $t){ ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6> <?php echo htmlspecialchars($t['title']); ?> </h6>
                        <!-- <div><?php //echo htmlspecialchars($t['players']); ?></div> -->
                        <ul>
                            <?php foreach(explode(',', $t['players']) as $p){ ?>
                            <li><?php echo htmlspecialchars($p) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php" class="brand-text">More Info</a>
                    </div>

                </div>
            </div>
            <?php } ?>

            <!-- WE CAN GIVE COLON AND ENDIF TAG INSTAD OF } THIS BRACKETS -->
            <?php if(count($team) >= 2 ):?>
                <p>There are two or more team</p>
            <?php else: ?>
                <p>There are less than two team</p>
            <?php endif; ?>
        </div>
    </div>
<?php include("templates/footer.php"); ?>
