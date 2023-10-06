<?php
function form_is_submitted() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function whoami() {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $curriculum = isset($_POST['curriculum']) ? $_POST['curriculum'] : '';

    $message = '';

    if (!empty($name)) {
        $message .= "Hi, my name is $name and";
    } else {
        $message .= "Hi, I have no name.";
    }

    if (!empty($age) && is_numeric($age) && $age > 0) {
        $message .= " I'm $age years old.";
    } elseif (empty($age)) {
        $message .= " I have no specified age.";
    } else {
        $message .= " Age is not valid.";
    }

    if (!empty($curriculum)) {
        $message .= " I'm a student of $curriculum.";
    }

    echo $message;
}
?>
