
<!-- SESSION IN ORDER TO CONTINUE  -->
<?php
session_start();
if(isset($_SESSION['email']) && 
    isset($_SESSION['user_id'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
        <h1>Welcome back! <?php echo $_SESSION['first_name']; ?><h1>
        <h2><?php echo $_SESSION['email']; ?><h2>
        <a href="logout.php">Logout</a>


</body>
</html>
<?php 
}else {
    $errorM = "Login First!";
    header("Location: login.php?error=$errorM");

}
?>