<?php


$user_id=(int) $_GET['user_id'];
    $sql="SELECT * FROM users WHERE user_id=:user_id";
    $query= $db->prepare($sql);
    $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
    $query->execute();
    $user=$query->fetch();
   // pre($user);
    
    
    require_once 'template/profile.php';