<?php

require_once ('db.php');
require_once ('component.php');



$con = createDB();


//CREATE BUTTON CLICK
if(isset($_POST["create"])){
//    echo "the button has been clicked";
    createData();
}


function createData(){
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue('book_publisher');
    $bookprice = textboxValue('book_price');


//    INSERT VALUE TO THE DATABASE
    if($bookname && $bookpublisher && $bookprice){
        $sql = "INSERT INTO books (book_name, book_publisher, book_price)
                VALUES ('$bookname','$bookpublisher','$bookprice')";
        if(mysqli_query($GLOBALS['con'], $sql)){
            echo "Record successfully inserted";
        }else{
            echo "Error" ;
        }
    }else{
        echo "Error provide data into textbox";
    }
}





//VALIDATE VALUE
function textboxValue($value){
//    TRIM WILL PREVENT SQL INJECTION
//    IT WILL ESCAPE SPECIAL CHARACTER IN STRING
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }

}



