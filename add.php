<?php include 'partial/head.php'; ?>

<div class="wrapper">

    <?php include "partial/nav.php"; ?>
    <br>
    <br>
    <br>
    <div class="ui container" id="form">
        <form class="ui inverted form" method="POST" action="<?php htmlentities($_SERVER['PHP_SELF']) ?>">
            <div class="field">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="field">
                <label>E-mail</label>
                <input type="text" name="email" placeholder="E-mail">
            </div>
            <div class="field">
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Mobile">
            </div>
            <div class="field">
                <label>Degree</label>
                <input type="text" name="degree" placeholder="Degree">
            </div>
            <div class="field">
                <label>Referance</label>
                <input type="text" name="refer" placeholder="Referance">
            </div>
            <div class="field">
                <label>Language</label>
                <input type="text" name="lang" placeholder="Language">
            </div>
            <input class="ui fluid green button" type="submit" name="submit" value="Submit" />
        </form>
    </div>
</div>






<?php
include "includes/db.php";
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $degree = mysqli_real_escape_string($conn, $_POST['degree']);
    $refer = mysqli_real_escape_string($conn, $_POST['refer']);
    $lang = mysqli_real_escape_string($conn, $_POST['lang']);



    $sql = "insert into reg( name ,  email ,  mobile ,  degree ,  refer ,  lang ) values ('$name' , '$email', '$mobile', '$degree', '$refer', '$lang')";

    $query = mysqli_query($conn, $sql);






    if ($query) {
?>
        <script>
            alert("Inserted successfull");
        </script>
    <?php
        header("Location: index.php?msg=added_one_item");
    } else {
    ?>
        <script>
            alert("Not Inserted");
        </script>
<?php
    }
}
?>