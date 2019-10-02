<?php
function formElelemt( $name, $type, $placeholder){
    $input = "
        <div class='form-group my-3 shadow'>
            <label for='$name' class='text-capitalize text-white'>$placeholder</label>
            <input type='$type' name='$name' class='form-control' placeholder='$placeholder'>
        </div>
    ";
    echo $input;
}

?>
