<?php


 //$user_id= intval($_GET['user_id']);
    $user_id= (int)$_GET['user_id'];
    //echo $user_id;
    $sql =  'DELETE FROM users WHERE user_id=:user_id';
    $query = $db->prepare($sql);
    $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
    $delete=$query->execute();
    if($delete == true){
        
        $_SESSION['success']='User has been deleted successfully';
        header('location:index.php');
        
    }