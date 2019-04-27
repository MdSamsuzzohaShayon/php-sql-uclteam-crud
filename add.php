<?php 
    //SETTING INITIAL EMPTY VALUE FOR ALL
    $title = $email = $players = '';


    //WE ARE MAKING A ERROR ARRAY WITH NO ERROR INITIALLY WE WILL STORE THAT LETTER
    $errors = array('email'=>'', 'title'=> '', 'players'=>'');


   //https://www.php.net/manual/en/function.isset.php
    // isset — Determine if a variable is declared and is different than NULL
    /*if(isset($_GET["submit"])){
        echo $_GET["email"];
        echo $_GET["title"];
        echo $_GET["players"];
    }*/


    if(isset($_POST["submit"])){
        // XSS protection with htmlspecialchars
        // echo htmlspecialchars($_POST["email"]);
        // echo htmlspecialchars($_POST["title"]);
        // echo htmlspecialchars($_POST["players"]);

        // CHECK EMAIL
        if(empty($_POST['email'])){
            // echo 'An email is required <br />';
            $errors['email'] = 'An email is required <br />' ; 
        }else{
            // echo htmlspecialchars($_POST["email"]);

            $email = $_POST['email'];
            // CHECKING FOR VALID EMAIL
            // https://www.php.net/manual/en/function.filter-var.php
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                // echo 'email must be a valid email address';
                $errors['email'] = 'email must be a valid email address';
            }
        }

        // CHECK TITLE
        if(empty($_POST['title'])){
            // echo 'An title is required <br />';
            $errors['title'] = 'An title is required <br />';
        }else{
            // echo htmlspecialchars($_POST["title"]);
            $title = $_POST['title'];
            // USING REGULAR EXPRESSION AND WE CAN USE IN ANY LANGUAGE
            // https://www.php.net/manual/en/function.preg-match.php
            // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                // echo "Title must be letters and spacess only";
                $errors['title'] = "Title must be letters and spacess only";
            }
        }

        // CHECK players
        if(empty($_POST['players'])){
            // echo 'An players is required <br />';
            $errors['players'] = 'An players is required <br />';
        }else{
            $players = $_POST['players'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $players)){
                // echo "players must be coma seperated list";
                $errors['players'] = "players must be coma seperated list";
            }
        }
        // END OF THE CHECK POST
    }
?>

<?php include("templates/header.php"); ?>
<section class="container grey-text">
    <h2 class="center">Add a team</h2>
    <form action="add.php" method="POST" class="white">
        <label>Your mail: </label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Team title: </label>
        <input type="text" name="title" value="<?php echo $title ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>


        <label>players (comma separated): </label>
        <input type="text" name="players" value="<?php echo $players ?>">
        <div class="red-text"><?php echo $errors['players']; ?></div>
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include("templates/footer.php");?>