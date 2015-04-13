<?php

function clear ($string){
    
    
    $string=trim($string);
    $string=stripcslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}