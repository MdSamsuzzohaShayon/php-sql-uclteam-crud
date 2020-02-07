<!-- ADD A RECORD TO THE DATABASE -->
<?php
require "config/db.php";


// ADD ITEM / CREATE ITEM
// ACTION ON CLICK THE BUTTON
if (isset($_POST['submit']) && $_POST['submit'] != '') {

    $id = (!empty($_GET['id'])) ? $_GET['id'] : '';
    echo "<div class='text-white bg-dark'>$id</div>";
    echo "<div class='text-white bg-dark'>Below Id preinting</div>";


  // CHECKING FOR NOT ANY OF THOSE FIELDS ARE EMPTY
    $name = (!empty($_POST['name'])) ? $_POST['name'] : '';
    $marketVlu = (!empty($_POST['marketVlu'])) ? $_POST['marketVlu']: '';
    $position = (!empty($_POST['position'])) ? $_POST['position'] : '';
    $club = (!empty($_POST['club'])) ? $_POST['club'] : '';

    if($id){
      // UPDATE `player` SET `id`=[value-1],`name`=[value-2],`market_value`=[value-3],`position`=[value-4],`club`=[value-5] WHERE 1
      // $sql = "UPDATE books SET book_name='$bookname', book_publisher='$bookpublisher', book_price='$bookprice' WHERE id='$bookid'";
      // UPDATE `player` SET `name` = 'Lionel Messi' WHERE `player`.`id` = 1;
        $query = "UPDATE player SET name='$name', market_value='$marketVlu', position='$position', club='$club' WHERE id='$id'";
        $message = "updated";
    }else{
    //   // MAKING QUERY TO INSERT DATA
        $query = "INSERT INTO player(name, market_value, position, club) VALUES ('$name', '$marketVlu', '$position', '$club')";
        $message = "added";
    }


// PERFORM OUR QUERY ON THE DATABASE
    if(mysqli_query($conn , $query)){
        header('Location: index.php?record='.$message);
        // if($_GET['record']=='success'){
        //     echo "<div class='alert-success'>record has been added </div>";
        // }
    }else{
        mysqli_error($conn);
    }
}








// EDIT ITEM / UPDATE ITEM





// SHOWING VALUE IN THE VALUE OF INPUT FORM
if(isset($_GET['id']) &&  $_GET['id'] != ''){

//   $movie_id = $_GET['id'];
//   $movie_query = "SELECT * FROM `movies` WHERE id='".$movie_id."'";
//   $movie_res = mysqli_query($conn, $movie_query);
//   $result = mysqli_fetch_row($movie_res);
// //    echo "<pre>"; print_r($result);
//   $movie = $result[1];
//   $director = $result[2];
//   $revenue = $result[3];

    $player_id = $_GET['id'] ;
    $query = "SELECT * FROM `player` WHERE id=$player_id";
    $result = mysqli_query($conn, $query);
    $records = mysqli_fetch_row($result); //  Get a result row as an enumerated array

    // echo "<div class='bg-success'> $records </div>"; // GETTING RESULT

    // EXTRACT ALL RESULT INDIVIDUALLY
    $name = $records[1];
    $marketVlu = $records[2];
    $position = $records[3];
    $club = $records[4];
    // echo "working";
}else{
    // $name = ''
    // // $marketVlu = '';
    // $position = '';
    // $club = '';
}


?>










<!-- THIS IS FOR EDIT ITEM -->
<?php require_once "partials/head.php"; ?>
<body>

<?php include_once "partials/nav.php"?>



<div class="container mt-5 shadow p-5">
    <h2 class="text-center">Change Players Information</h2>
    <br>
    <form action="" method="post">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Player Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="Enter player name !" >
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="marketVlu">Market Value</label>
                    <input type="text" class="form-control" name="marketVlu" value="<?php echo $marketVlu; ?>" placeholder="Enter Market Value !">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" name="position" value="<?php echo $position; ?>" placeholder="Enter player position !">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="club">Market Value</label>
                    <input type="text" class="form-control" name="club" value="<?php echo $club; ?>" placeholder="Enter Club Name !" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" name="submit">
        </div>
    </form>
</div>

<?php include_once "partials/footer.php" ?>
