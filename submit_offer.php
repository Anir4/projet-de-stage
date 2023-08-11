<?php
include_once './includes/database.php';
$conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $offerId = isset($_POST['offerId']) ? $_POST["offerId"] : null;
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
    if ($offerId) {
      //delete old offer picture :

      $oldImagePathQuery = "SELECT image_path FROM offers WHERE id='$offerId'";
      $oldImagePathResult = mysqli_query($conn, $oldImagePathQuery);
      $oldImagePathRow = mysqli_fetch_assoc($oldImagePathResult);
      $oldImagePath = $oldImagePathRow['image_path'];

      if (file_exists($oldImagePath)) {
        unlink($oldImagePath);
      }

      //updating offer :

      $sql = "UPDATE offers 
                  SET duration='$duration', km='$km', detail1='$detail1', detail2='$detail2', detail3='$detail3',
                  title='$title', price='$price', image_path='$targetFilePath'
                  WHERE id='$offerId'";
    } else {
      //INSERTING OFFER :
      $sql = "INSERT INTO offers (duration, km, detail1, detail2, detail3, title, price, image_path) 
                  VALUES ('$duration', '$km', '$detail1', '$detail2', '$detail3', '$title', '$price', '$targetFilePath')";
    }

    if (mysqli_query($conn, $sql)) {
      header("location: home.php");
      exit();
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>
