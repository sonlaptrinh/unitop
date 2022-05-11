<?php
function is_username($username){
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username, $matchs))
        return false;
        return true;
}

function is_password($password){
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $password, $matchs))
        return false;
        return true;
}
function form_error($label_field){
    global $error;
    if (!empty($error['$label_field'])) {echo $error['$label_field'];};
}

function set_value($label_field){
    global $$label_field;
    if (!empty($error['$$label_field'])) {echo $error['$$label_field'];};
}
