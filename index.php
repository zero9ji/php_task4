<?php
session_start();
//server data
require_once 'includes/config.php';


//connect to database
require_once 'includes/db.php';


//unset($_SESSION['login']);

require_once 'functions/pre.php';
require_once 'functions/salt.php';
require_once 'functions/clear.php';



/*$password=132456;
echo salt($password);*/


////--------------------not working correctly so i commented it 

/*     
if(!isset($_SESSION['login'])){
    
    require_once 'controller/login.php';
    exit();
}
*/
///---------------------


/*
$user_data= substr($_SESSION['login'],0,8);
$user_id= (int) $user_data;

$sql= 'SELECT * FROM users WHERE user_id=:user_id';
$query=$db->prepare($sql);
$query=bindParam(':user_id',$user_id,PDO::PARAM_STR);
$query->execute();

$user_info=$query->fetch();
*/


//action
$action= (isset($_GET['action']) ? $_GET['action']: NULL);
if($action == 'add')
{
    require_once 'controller/add_user.php';
    
}
//delete user
elseif($action=='delete'){
   require_once 'controller/delete_user.php';
    
}
//edit user
elseif($action == 'edit'){
    
       require_once 'controller/edit_user.php';
}
// view profile
elseif($action == 'view'){
    require_once 'controller/profile.php';
    
}
elseif($action== 'logout'){
    
    require_once 'controller/logout.php';
}
else {
    
  require_once 'controller/users.php';
}

