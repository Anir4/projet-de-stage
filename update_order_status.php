<?php
include "./includes/database.php";
$conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["orderId"]) && isset($_POST["status"])) {
    $orderId = $_POST["orderId"];
    $status = $_POST["status"];

    $updateQuery = "UPDATE orders SET status = '$status' WHERE id = $orderId";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Order status updated successfully.";
    } else {
        echo "Error updating order status: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>