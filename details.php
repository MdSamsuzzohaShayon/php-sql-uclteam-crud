<?php

    include('config/db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

        $sql = "DELETE FROM players WHERE id = $id_to_delete";

        if(mysqli_query($conn, $sql)){
          // SUCCESS
          header('Location: index.php');
        }else{
          // FAILURE
          echo 'query error: ' . mysqli_error($conn);
        }
    }


    // CHECK GET REQ ID PARAM
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        //MAKE SQL
        $sql = "SELECT * FROM team WHERE id = $id";

        // GET THE QUERY RESULTS
        $result = mysqli_query($conn, $sql);

        // FETCH RESULT IN ARRAY FORMAT
        $team = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($team);
    }

?>

<?php include('templates/header.php'); ?>
<div class="container center">
    <?php if($team): ?>
        <h4><?php echo htmlspecialchars($team['title']); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($team['email']); ?></p>
        <p><?php echo date($team['created_at']); ?></p>
        <h5>Players:</h5>
        <p><?php echo htmlspecialchars($team['players']); ?></p>
        <!-- DELETE FORM -->
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $team['id'] ?>">
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>
    <?php else: ?>
    <h4>No such pizza exist</h4>
    <?php endif; ?>
</div>
<?php include('templates/footer.php'); ?>
