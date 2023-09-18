<!DOCTYPE html>
<html>
   <head>
        <link rel="stylesheet" href="style.css">
   </head>
<body>
    <div class="container">
        <form action="signup_check_admin.php" method="post">
         <h1>Admin Sign Up</h1>
         <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
         <?php }  ?>

         <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
         <?php }  ?>

         <label>Name</label>
         <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
                   name="name" 
                   placeholder="Name" 
                   value="<?php echo $_GET['name']; ?>"><br>
         <?php }else{ ?>
            <input type="text" 
                   name="name" 
                   placeholder="Name"><br>
         <?php }?>


         <label>User Name</label>
         <?php if (isset($_GET['uname'])) { ?>
            <input type="text" 
                   name="uname" 
                   placeholder="User Name" 
                   value="<?php echo $_GET['uname']; ?>"><br>
         <?php }else{ ?>
            <input type="text" 
                   name="uname" 
                   placeholder="User Name"><br>
         <?php }?>
 
         <label>Password</label>
         <input type="password" 
                name="password" 
                placeholder="Password"><br> 

         <label>Re_Password</label>
         <input type="password" 
                name="re_password" 
                placeholder="Re_Password"><br>
 
         <button type="submit">Sign Up</button>
         <a href="index_admin.php" class="ca">Already have an account?</a>
        </form>
     </div>


</body>
</html>