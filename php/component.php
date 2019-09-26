<?php


function inputElement($icon, $placeholder, $name, $value)
{
    $ele = "
        <div class=\"field\">
            <label for='$name' class=\"ui blue header huge\">$placeholder</label>
            <div class=\"ui right labeled input\">
                <label for=\"id\" class=\"ui label\">$icon</label>
                <input name='$name' autocomplete='off' value='$value' type=\"text\" placeholder='$placeholder' id=\"id\">
            </div>
        </div>
";
    echo $ele;
}



function buttonElement($btnid, $styleclass, $text, $name, $icon)
{
    $btn = "
    <div class='field'>
    <button name='$name' class='$styleclass' tabindex=\"0\" type='submit'>
          <div  class=\"visible content\">
            $icon
          </div>
           <div  class=\"hidden content\"> $text </div>
    </button>
</div>

    ";

    echo $btn;
}