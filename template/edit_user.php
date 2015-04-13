    <!DOCTYPE HTML>
    <html>
        <head>
            <meta charset ="utf-8"/>

            <title>Edit user</title>

        </head>

        <body>
            <form action="" method="post">
            <input type="text" name="username" placeholder= "username" value="<?php echo $user['username'];?>" /><br>
            <input type="password" name="password" placeholder="password"  value="<?php echo $user['password'];?>" /><br>
            <input type="email" name="email" placeholder="email" value="<?php echo $user['email'];?>" /><br>
            <input type="submit" name="edit" value="Edit new user"/><br>
            </form>
        </body>
    </html>