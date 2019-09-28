<?php

require_once ('db.php');
require_once ('component.php');



$con = createDB();


//CREATE BUTTON CLICK
if(isset($_POST["create"])){
//    echo "the button has been clicked";
    createData();
}


// UPDATE DATA FROM TABLE TO DATABASE THOUGH INPUT FIELD
if(isset($_POST['update'])){
    updateData();
}



//LOAD DATA ON BUTTON CLICK


function createData(){
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue('book_publisher');
    $bookprice = textboxValue('book_price');


//    INSERT VALUE TO THE DATABASE
    if($bookname && $bookpublisher && $bookprice){
        $sql = "INSERT INTO books (book_name, book_publisher, book_price)
                VALUES ('$bookname','$bookpublisher','$bookprice')";
        if(mysqli_query($GLOBALS['con'], $sql)){
            textNode("ui positive message", "Record successfully inserted");
        }else{
            echo "Error" ;
        }
    }else{
        textNode("ui negative message", "Provide data in the text box");
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



//MESSAGE
function textNode($classname, $msg){
    $element = "<div class='$classname'> $msg </div>";
    echo $element;
}





//GET DATA FROM DATABASE
function getData(){
    $sql = "SELECT*FROM books";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result)>0){
        return $result;
    }
}



//UPDATE DATA
function updateData(){
    $bookid = textboxValue('book_id');
    $bookname = textboxValue('book_name');
    $bookpublisher = textboxValue('book_publisher');
    $bookprice = textboxValue('book_price');


    if($bookname && $bookpublisher && $bookprice){
        $sql = "
            UPDATE books SET book_name='$bookname', book_publisher='$bookpublisher', book_price='$bookprice' WHERE id='$bookid'
        ";

        if(mysqli_query($GLOBALS['con'], $sql)){
            textNode("ui positive message", "Record successfully updated");
        }else{
            textNode("ui negative message", "Error: to update data");
        }
    }else{
        textNode("ui negative message", "Select data by using edit icon");
    }

}

