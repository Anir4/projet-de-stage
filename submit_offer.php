<?php
include_once './includes/database.php';
$conn= mysqli_connect($bd_server,$bd_user,$bd_pass,$bd_name);

?>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    $duration = $_POST['duration'];
    $km = $_POST['km'];
    $detail1 = $_POST['detail1'];
    $detail2 = $_POST['detail2'];
    $detail3 = $_POST['detail3'];
    $title = $_POST['title'];
    $price = $_POST['price'];


  $targetDir = "./public/images/offres/";
  $targetFile = $targetDir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  $uniqueFileName = uniqid("offer_") . "." . $imageFileType;
  $targetFilePath = $targetDir . $uniqueFileName;

  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {

    $sql = "INSERT INTO offers (duration, km, detail1, detail2, detail3, title, price ,image_path) 
    VALUES ('$duration', '$km', '$detail1', '$detail2', '$detail3', '$title', '$price','$targetFilePath')";
    if (mysqli_query($conn, $sql)) {
        header("location: home.php");
        exit();
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
