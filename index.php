<?php require_once "partials/head.php"; ?>
<body>

<?php include_once "partials/nav.php"?>



<div class="container mt-5 shadow p-5">
    <h2 class="text-center">Enter Players Information</h2>
    <br>
    <form action="add.php" method="post">
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Player Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter player name !">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="marketVlu">Market Value</label>
                    <input type="text" class="form-control" name="marketVlu" placeholder="Enter Market Value !">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" name="position" placeholder="Enter player position !">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="club">Market Value</label>
                    <input type="text" class="form-control" name="club" placeholder="Enter Club Name !">
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" name="submit">
        </div>
    </form>

    <br><br>
    <table class="table text-white bg-dark">
      <?php
        $query = "SELECT * FROM `player`"; // MAKING QUERY TO GET DATA FROM OUR DATABASE
        $result = mysqli_query($conn, $query); // PERFORM A QUERY IN THE DATABASE
        $records = mysqli_num_rows($result); //GET THE NUMBER OF ROWS IN A RESULT


       ?>
        <thead>
            <th>Name</th>
            <th>Market Value</th>
            <th>Position</th>
            <th>Club</th>
            <th>Action</th>
        </thead>
        <tbody>
          <?php
              if(!empty($records)){
                // Fetch a result row as an associative array
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                  <!-- WHIRE HTML HERE -->
                  <tr>
                      <td><?php echo htmlspecialchars( $row['name']); ?></td>
                      <td><?php echo htmlspecialchars($row['market_value']); ?></td>
                      <td><?php echo htmlspecialchars($row['position']) ; ?></td>
                      <td><?php echo htmlspecialchars( $row['club']); ?></td>
                      <td>
                        <a href="add.php?id=<?php echo $row['id']; ?>" type="button" name="edit" class="btn btn-primary d-inline">Edit</a>
                        <form class="d-inline" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php $row['id']; ?>">
                            <input type="submit" name="delete" value="Delete" class="btn btn-danger d-inline">
                        </form>
                      </td>
                  </tr>
                  <?php
                }
              }
           ?>
            <!-- <tr>
                <td>Erling Haaland</td>
                <td>120</td>
                <td>Forward</td>
                <td>Borussia Dortmund</td>
            </tr> -->
        </tbody>
    </table>
</div>

<?php include_once "partials/footer.php" ?>
