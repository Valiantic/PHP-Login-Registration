
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
    $pass = valdiate_input($_POST['c_pass']);



}
else {
    
}



?>