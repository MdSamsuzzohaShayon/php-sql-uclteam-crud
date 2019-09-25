<?php


function inputElement()
{
    $ele = "
        <div class=\"field\">
            <label for=\"id\" class=\"ui blue header huge\">Enter your ID Number</label>
            <div class=\"ui right labeled input\">
                <label for=\"id\" class=\"ui label\"><i class=\"id card icon\"></i></label>
                <input type=\"text\" placeholder=\"ID\" id=\"id\">
            </div>
        </div>
";
    echo $ele;
}