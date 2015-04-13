<?php

 $user_id=(int) $_GET['user_id'];

      if(isset($_POST['edit']))
    {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        
        
        //$sql='INSERT INTO users(username,password,email) VALUES(:username,:password,:email)';
        $sql = 'UPDATE users SET username=:username , password=:password , email=:email WHERE user_id=:user_id';

        $query=$db->prepare($sql);
        $query->bindParam('username',$username,PDO::PARAM_STR);
        $query->bindParam('password',$password,PDO::PARAM_STR);
        $query->bindParam('email',$email,PDO::PARAM_STR);
        $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
        $update= $query->execute();
        
        if($update== TRUE){
            $_SESSION['success']='User data has been updated successfully';
            header('location:index.php');

        }
          else{
              
              echo "there is something wrong in the update";
          }
        
        
    }
       
    
    
    /*
     if(isset($_POST['edit']))
    {
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        
        
        $sql='UPDATE users SET username=:username,password=:password,email=:email WHERE user_id=:user_id';
        
        $query=$db->prepare($sql);
        $query->bindParam('username',$username,PDO::PARAM_STR);
        $query->bindParam('password',$password,PDO::PARAM_STR);
        $query->bindParam('email',$email,PDO::PARAM_STR);
        $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
       
        $update= $query->execute();
        
        if($update == TRUE){
            
            $_SESSION['success']='User data has been updated successfully';
            header('location:index.php');
        }
     }*/
    
    
    
    
    $sql= 'SELECT * FROM users WHERE user_id=:user_id';
    $query = $db->prepare($sql);
    $query->bindParam('user_id',$user_id,PDO::PARAM_STR);
    $query->execute();
    $user= $query->fetch();
    //pre($user);
    
    require_once 'template/edit_user.php';
    
    