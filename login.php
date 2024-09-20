<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h3>Login</h3>

    <?php if (isset($_GET['error'])) { ?>
     	<b style="color: #f00;"><?=$_GET['error']?></b><br>
      <?php } ?>

      <!-- ACTION TO LOGIN -->
    <form action="app/login.php" method="POST">
    
        <label>Email</label><br/>
        <input type="email" name="email" placeholder="Enter your Email Address..."/><br/>
        <label>Password</label><br/>
        <input type="password" name="pass" placeholder="Enter your Password..."/><br/>
        <button type="submit">Login</button>
        <a href="signup.php">Signup</a>
        
    </form>
    
</body>
</html>