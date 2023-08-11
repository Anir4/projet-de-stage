<script>
function 
deleteOffer(offerID) {
  if (confirm("Are you sure you want to delete this offer (this will delete all orders related to this offer)?")) {
    $.ajax({
      type: "POST",
      url: "",
      data: { id: offerID },
      success: function(response) {
        location.reload();
      },
      error: function(xhr, status, error) {
        alert("Error deleting the offer.");
      }
    });
  }
}
</script>
<?php
include "database.php";
$conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {

$offerID = $_POST["id"];

$sql = "DELETE FROM orders WHERE selectedOffer = $offerID";
mysqli_query($conn, $sql);
$sql = "DELETE FROM offers WHERE id = $offerID";
if (mysqli_query($conn, $sql)) {
    echo "Offer deleted successfully.";
} else {
    echo "Error deleting the offer: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>