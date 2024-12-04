<?php

function checkEmpty($value){

    if(empty($value)) return false;
    else return true;

}


function validEmail($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function checkLess($value,$min){
    if(strlen(trim($value))<=$min){
        return false;
    }
    return true;
}


?>