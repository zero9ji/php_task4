<?php


if(isset($_POST['register']))
    {
        
        $username=clear($_POST['username']);
        $password=clear($_POST['password']);
        $password=salt($password);
        //die($password);
        $email=clear($_POST['email']);
        
        
        //$sql='INSERT INTO users(username,password,email) VALUES(:username,:password,:email)';
        $sql='INSERT INTO users SET username=:username , password=:password , email=:email';
        
        $query=$db->prepare($sql);
        $query->bindParam('username',$username,PDO::PARAM_STR);
        $query->bindParam('password',$password,PDO::PARAM_STR);
        $query->bindParam('email',$email,PDO::PARAM_STR);
        $insert= $query->execute();
        
        if($insert== true){
            $_SESSION['success']='User data has been Added successfully';
            header('location:index.php');
        }
        
        
    }
    require_once 'template/add_user.php';
 