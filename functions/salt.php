<?php
function salt($password){
    $salt ='afjli2wur29378r#$@#$02389479&*(&*(%^*^&))';
    $new_password= sha1($password.$salt);
    return $new_password;
    
}