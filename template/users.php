<!DOCTYPE HTML>
<html>
    <head>
        <meta charset ="utf-8"/>
    
        <title>users</title>
        <style>
            *{
                padding:0;
                border-spacing:0;
                
            } 
            table{
                
                width:100%;
                
            }
            
            td,th{
                text-align: center;
                border:1px solid #EEE;
            }
        </style>
    </head>

    <body>
        <?php if($success){?>
            <div style="color: green"><?php echo $success; ?></div>
        <?php } ?>
        <a href ="?action=add">Add new user</a>
        <a href ="?action=logout" style ="float: right">logout</a>
    <table>
        
        <tr>
            <th>#</th>
            <th>username</th>
            <th>Email</th>
            <th>Control</th>
        </tr>
        <?php if($total_users == 0){ ?> 
        <tr>
            <td colspan="4">There is no users until now</td>
        </tr>
            <?php }else{
            foreach($users as $user){?>
            <tr>
                <td><?php echo $user['user_id'];?></td>
                <td>
                    <a href="?action=view&user_id=<?php echo $user['user_id'];?>"><?php echo $user['username'];?></a>
                </td>
                <td><?php echo $user['email'];?></td>
                <td>
                    <a href="?action=edit&user_id=<?php echo $user['user_id'];?>">Edit</a>
                    <a href="?action=delete&user_id=<?php echo $user['user_id'];?>">Delete</a>
                </td>

            </tr>
            <?php } ?>
            <?php } ?>
   
        </table>
    
    </body>
</html>