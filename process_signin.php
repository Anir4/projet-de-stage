<?php
include "./includes/database.php";
$conn= mysqli_connect($bd_server,$bd_user,$bd_pass,$bd_name);

?>

<?php 
function validate($data){
    $data =trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
return $data;
}
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
$email=validate($_POST['email']);
$pass= validate($_POST['password']);

$sql="SELECT password FROM users WHERE email='$email' OR phone='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
    if (password_verify($pass,$row['password'])) {
    $hash=$row['password'];
    $sql="SELECT * FROM users WHERE (email='$email' OR phone='$email') AND password='$hash'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if (($row['phone']== $email || $row['email']== $email) && $row['password']== $hash) {

        session_start();
            $_SESSION['id']=$row['id'];
            $_SESSION['firstname']=$row['first_name'];
            $_SESSION['lastname']=$row['last_name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['birth_date']=$row['birth_date'];
            $_SESSION['reg_date']=$row['reg_date'];
            
         header("location: home.php");
            exit();                       

        }else{
                 header("location: signin.php?error=incorect email/number or password");
                 exit();}
    }

else{
             header("location: signin.php?error=incorect email/number or password");
             exit();}
 mysqli_close($conn);
}
?>