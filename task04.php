<?php
function whoami()
{
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $age = isset($_POST['age']) ? $_POST['age'] : null;

    if ($name != null && is_numeric($age) && $age > 0) {
        echo "Hi, my name is $name and I'm $age years old.";
    } elseif ($name == null && is_numeric($age) && $age > 0) {
        echo "Hi, I have no name and I'm $age years old.";
    } elseif ($name != null && (!is_numeric($age) || $age <= 0)) {
        echo "Hi, my name is $name.";
    } else {
        echo "Hi, I have no name.";
    }
}
