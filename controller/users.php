<?php

  $sql= 'SELECT * FROM users ORDER BY user_id DESC';
    $query = $db->prepare($sql);
    $query->execute();
    $users = $query->fetchAll();
    $total_users=$query->rowCount();
    //echo $total_users;
    if(isset($_SESSION['success'])){
        
        $success=$_SESSION['success'];
        unset($_SESSION['success']);
    }
    else{
        
        $success=NUll;
    }
    
    //pre($users);
    
    require_once 'template/users.php';
    