<?php

function inputHas($key){
    if(isset($_REQUEST[$key])) {
        return true;
    } else {
        return false;
    }
}
function inputGet($key){
    if(inputHas($key)) {
        return $_REQUEST[$key];
    } else {
        return NULL;
    }
}
function escape($input){
    return strip_tags($input);
}
?>