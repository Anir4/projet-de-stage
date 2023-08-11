<?php
ob_start();
?>

<?php
include "./includes/database.php";
$conn= mysqli_connect($bd_server,$bd_user,$bd_pass,$bd_name);

?>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    $firstname = filter_input(INPUT_POST,"firstname",FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST,"lastname",FILTER_SANITIZE_SPECIAL_CHARS);
    $email= filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
    $Password = filter_input(INPUT_POST,"Password",FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST,"phone",FILTER_SANITIZE_SPECIAL_CHARS);
    $date = $_POST["date"];
    $hash = password_hash($Password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (first_name,last_name,email,password,phone,birth_date) VALUES ('$firstname','$lastname','$email','$hash','$phone','$date')";

try{mysqli_query($conn, $sql);
}
catch(mysqli_sql_exception){
    ob_end_clean();
    header("location: index.php?error=this email or phone number already has an account");
                 exit();
}

header("location: signin.php");
ob_end_flush();
exit();

}

 mysqli_close($conn);
?>