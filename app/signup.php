
<?php

// CLEAN USER INPUT
function validate_input ($data){

    $data = trim($data); // remove whitespaces
    $data = stripcslashes($data); // remove slashes
    $data = htmlspecialchars($data); // converts special characters into XML
    return $data;

}

// CHECK IF THE INPUT IS NULL OR NOT 
if(isset($_POST['first_name']) && 
   isset($_POST['last_name']) &&
   isset($_POST['email']) && 
   isset($_POST['pass']) && 
   isset($_POST['c_pass'])) {

    // DATABASE CONNECTION
    include "../connections.php";

    // VARIABLE ASSIGN
    $first_name = validate_input($_POST['first_name']);
    $last_name = validate_input($_POST['last_name']);
    $email = validate_input($_POST['email']);
    $pass = validate_input($_POST['pass']);
    $c_pass = validate_input($_POST['c_pass']);


    // BLANK FIELD DETECTOR
    if(empty($first_name)){
        $errorM = "First name is required";
        header("Location: ../signup.php?error=$errorM");
    }else if (empty($last_name)) {
        $errorM = "Last name is required";
        header("Location: ../signup.php?error=$errorM");
    }else if (empty($email)) {
        $errorM = "Email address is required";
        header("Location: ../signup.php?error=$errorM");
    }else if (empty($pass)) {
        $errorM = "Password is required";
        header("Location: ../signup.php?error=$errorM");
    }else if (empty($c_pass)) {
        $errorM = "Confirm password is required";
        header("Location: ../signup.php?error=$errorM");
    }else if (empty($pass != $c_pass)) {
        $errorM = "Password and Confirm Password does not Match!";
        header("Location: ../signup.ph?error=$errorM");
    }else {

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    if($stmt->rowCount() > 0){
        $errorM = "This email is already associated with another account";
        header("Location: ../signup.php?error=$errorM");

    }else {

        $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$first_name, $last_name, $email, $pass]);

        $successM = "successfully registered!";
        header("Location: ../signup.php?success=$successM");
    }


    }


}
else {
    header("Location: ../signup.php");
}



?>