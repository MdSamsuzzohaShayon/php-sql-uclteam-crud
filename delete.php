<?php
require_once 'config/db.php';
if(isset($_POST['delete'])){
  // $player_id = (!empty($_POST['id']))? !empty($_POST['id']) : '';
  // $player_id = $_POST['id'];
  echo "<div class='bg-dark text-white'>Delete button has been pressed</div>";
  $player_id = (!empty($_POST['id'])) ? $_POST['id'] : '';

  echo "<div class='bg-dark text-white'>$player_id</div>";


  $query = "DELETE FROM player WHERE id='$player_id'";
  $result2 = mysqli_query($conn, $query);
  if($result2){
    header('Location: index.php?deleted=success');
    echo "Deleted successfully";
  }
}
 ?>
