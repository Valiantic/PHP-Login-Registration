<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

    <h3>Signup</h3>


    <!-- ERROR AND SUCCESS HANDLING -->
    <?php if (isset($_GET['error'])) { ?>
     	<b style="color: #f00;"><?=$_GET['error']?></b><br>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
     	<b style="color: #0f0;"><?=$_GET['success']?></b><br>
      <?php } ?>



    <form action="app/signup.php" method="POST">
        <label>First Name</label><br/>
        <input type="text" name="first_name" placeholder="Enter your First Name..."/><br/>
        <label>Last Name</label><br/>
        <input type="text" name="last_name" placeholder="Enter your Last Name..."/><br/>
        <label>Email</label><br/>
        <input type="email" name="email" placeholder="Enter your Email Address..."/><br/>
        <label>Password</label><br/>
        <input type="password" name="pass" placeholder="Enter your Password..."/><br/>
        <label>Confirm Password</label><br/>
        <input type="password" name="c_pass" placeholder="Confirm Password..."/><br/>
        <button type="submit">Sign Up</button>
        <a href="login.php">Login</a>
        
    </form>
    
</body>
</html>