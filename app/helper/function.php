<?php

use phpDocumentor\Reflection\Types\Null_;

function showErrors($errors, $name)
{
    if ($errors->has($name)) {
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>' . $errors->first($name) . '</strong>';
        echo '</div>';
    }
}

