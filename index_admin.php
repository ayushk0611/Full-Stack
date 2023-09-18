<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <form action="login_admin.php" method="post">
         <h1>Event Management System</h1>
         <h2>Admin Login</h2>
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php }  ?>
         <label>Admin User Name</label>
         <input type="text" name="uname" placeholder="User Name"><br>
 
         <label>Admin Password</label>
         <input type="password" name="password" placeholder="Password"><br> 
 
         <button type="submit">Login</button>
         <button type="button"><a href="index.html" class="ca">Cancel</a></button>
         <button type="button"><a href="signup_admin.php" class="ca">Sign Up</a></button>
        </form>
     </div>
</body>
</html>