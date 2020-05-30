<?php
include "includes/db.php";
$id = $_GET['id'];

$sql_delete = "delete from reg where id=$id";
$query = mysqli_query($conn, $sql_delete);

if ($query) {
?>
    <script>
        console.log("Deleted successfull");
    </script>
<?php
header("Location: index.php?msg=deleted_one_item");
} else {
?>
    <script>
        console.log("Not Deleted");
    </script>
<?php
}
?>