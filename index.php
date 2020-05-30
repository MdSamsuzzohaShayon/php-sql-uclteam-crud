<!-- https://www.youtube.com/watch?v=wwasPLJ6Qbc&t=757s -->

<!-- https://www.youtube.com/watch?v=SAMbNqkDLLA&t=15s -->
<!DOCTYPE html>
<html lang="en">

<?php include 'partial/head.php'; ?>

<body>
    <div class="wrapper">
        <?php include "partial/nav.php"; ?>
        <br>
        <br>
        <br>
        <div class="ui container">
            <table class="ui celled green table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>Degree</th>
                        <th>Referance</th>
                        <th>Language</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/db.php";

                    $sql = "select * from reg ";
                    $query = mysqli_query($conn, $sql);

                    while ($result = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>

                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['mobile']; ?></td>
                            <td><?php echo $result['degree']; ?></td>
                            <td><?php echo $result['refer']; ?></td>
                            <td><?php echo $result['lang']; ?></td>
                            <td>
                                <div class="ui button">
                                    <a href="update.php?id=<?php echo $result['id']; ?>"><i class="icon edit"></i></a>
                                </div>
                                <div class="ui button">
                                <a href="delete.php?id=<?php echo $result['id']; ?>"><i class="icon minus"></i></a>
                                </div>
                            </td>
                        </tr>

                    <?php
                        // echo $result['name'];
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>

    </div>

</body>

</html>