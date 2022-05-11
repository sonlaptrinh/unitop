<?php
function is_username($username){
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $_POST['username'], $matchs)) {
        return false;
        return true;
    };
};