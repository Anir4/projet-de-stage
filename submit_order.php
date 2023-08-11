<?php
session_start();
include'./includes/database.php';
$conn= mysqli_connect($bd_server,$bd_user,$bd_pass,$bd_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);


    $user_id=$_SESSION['id'];
    $city = $data[1]["city"];
    $biketype = $data[1]["biketype"];
    $rentduration=$data[2]["rentduration"];
    $selectedOffer = $data [2]["selectedOffer"];
    $quantity = $data[2]["quantity"];
    $Address = isset($data[3]["Address"]) ? $data[3]["Address"] : null;
    $bikenbr = $data[3]["bikenbr"];
    $rentDate = $data[3]["rentDate"];
    $total = $data[3]["total"];

    

     $sql = "INSERT INTO orders (user_id, city, biketype, rentduration, selectedOffer, quantity, Address, bikenbr, rentDate, total) VALUES ('$user_id', '$city', '$biketype', '$rentduration', '$selectedOffer', '$quantity', '$Address', '$bikenbr', '$rentDate', '$total')";

     if (mysqli_query($conn, $sql)) {
        $response = array("message" => "Order submitted successfully!");
        echo json_encode($response);
    } else {
        $response = array("error" => "Error: " . mysqli_error($conn));
        echo json_encode($response);
    }

    mysqli_close($conn);
} else {
    $response = array("error" => "Invalid request");
    echo json_encode($response);
}

?>

