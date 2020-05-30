<?php include 'partial/head.php'; ?>

<div class="wrapper">

    <?php include "partial/nav.php"; ?>
    <br>
    <br>
    <br>
    <div class="ui container" id="form">
        <form class="ui inverted form" method="POST" action="">
            <?php
            include "includes/db.php";
            $id = $_GET['id'];
            $sql = "select * from reg where id=$id";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($query);



            if (isset($_POST['submit'])) {
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
                $degree = mysqli_real_escape_string($conn, $_POST['degree']);
                $refer = mysqli_real_escape_string($conn, $_POST['refer']);
                $lang = mysqli_real_escape_string($conn, $_POST['lang']);


                // UPDATE `reg` SET `id`=[value-1],`name`=[value-2],`email`=[value-3],`mobile`=[value-4],`degree`=[value-5],`refer`=[value-6],`lang`=[value-7] WHERE 1

                // $sql = "insert into reg( name ,  email ,  mobile ,  degree ,  refer ,  lang ) values ('$name' , '$email', '$mobile', '$degree', '$refer', '$lang')";

                $sql_update = " update reg set id=$id, name='$name', email='$email', mobile='$mobile', degree='$degree', refer='$refer', lang='$lang' where id=$id ";

                $query = mysqli_query($conn, $sql_update);


                if ($query) {
            ?>
                    <script>
                        console.log("Updated successfull");
                    </script>
                <?php
                header("Location: index.php?msg=updated_one_item");
                } else {
                ?>
                    <script>
                        console.log("Not Updated");
                    </script>
            <?php
                }
            }
            ?>
            <div class="field">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $result['name']; ?>" placeholder="Name">
            </div>
            <div class="field">
                <label>E-mail</label>
                <input type="text" name="email" value="<?php echo $result['email']; ?>" placeholder="E-mail">
            </div>
            <div class="field">
                <label>Mobile</label>
                <input type="text" name="mobile" value="<?php echo $result['mobile']; ?>" placeholder="Mobile">
            </div>
            <div class="field">
                <label>Degree</label>
                <input type="text" name="degree" value="<?php echo $result['degree']; ?>" placeholder="Degree">
            </div>
            <div class="field">
                <label>Referance</label>
                <input type="text" name="refer" value="<?php echo $result['refer']; ?>" placeholder="Referance">
            </div>
            <div class="field">
                <label>Language</label>
                <input type="text" name="lang" value="<?php echo $result['lang']; ?>" placeholder="Language">
            </div>
            <input class="ui fluid green button" type="submit" name="submit" value="Update" />
        </form>
    </div>
</div>