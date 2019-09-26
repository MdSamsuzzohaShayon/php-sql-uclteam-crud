<?php

require_once ('db.php');
require_once ('component.php');



$con = createDB();


//CREATE BUTTON CLICK
if(isset($_POST["create"])){
    echo "Create button clicked";
}
