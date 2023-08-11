<?php
include "database.php";
$conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);


function display()
{
    include "database.php";
    $sql = "SELECT * FROM offers";
    $conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $offersArray = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $offersArray[] = $row;
        }

        foreach ($offersArray as $offer) {
            $offerTitle = $offer['title'];
            $offerPrice = $offer['price'];
            $offerID = $offer['id'];
            $offerImagePath = $offer['image_path'];
            $offerKM = $offer['km'];
            $offerDetail1 = $offer['detail1'];
            $offerDetail2 = $offer['detail2'];
            $offerDetail3 = $offer['detail3'];
            $offerDuration = $offer['duration'];

            echo '<div class="offer-card">';
            echo '<img class="offreimg" src="' . $offerImagePath . '" alt="' . $offerTitle . '">';
            echo '<div class="offer-details">';
            if (!empty($offerTitle)) {
                echo '<h2>' . $offerTitle . '</h2>';
            }
            echo '<p class="price">' . $offerPrice . ' DH</p>';
            if (!empty($offerDuration)) {
                echo '<h3 class="duration">' . $offerDuration . ' Day</h3>';
            }

            if (!empty($offerKM)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span>' . $offerKM . ' </span>';
                echo '</div>';
            }

            if (!empty($offerDetail1)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span>' . $offerDetail1 . '</span>';
                echo '</div>';
            }

            if (!empty($offerDetail2)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span>' . $offerDetail2 . '</span>';
                echo '</div>';
            }

            if (!empty($offerDetail3)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span>' . $offerDetail3 . '</span>';
                echo '</div>';
            }
            if ($_SESSION['id'] == "1" && $_SESSION['firstname'] == "ADMIN") {
                echo '<button class="delete-btn" onclick="deleteOffer(' . $offerID . ')">Delete</button>';
            } else {
                echo '<a href="./rental.php"><button href="./rental.php" class="rentb" id="rent"> Rent Now</button></a>';
            }

            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No offers found.";
    }
    mysqli_close($conn);
}




function displayoffers()
{
    include "database.php";
    $sql = "SELECT * FROM offers";
    $conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $offersArray = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $offersArray[] = $row;
        }

        foreach ($offersArray as $offer) {
            $offerTitle = $offer['title'];
            $offerPrice = $offer['price'];
            $offerID = $offer['id'];
            $offerImagePath = $offer['image_path'];
            $offerKM = $offer['km'];
            $offerDetail1 = $offer['detail1'];
            $offerDetail2 = $offer['detail2'];
            $offerDetail3 = $offer['detail3'];
            $offerDuration = $offer['duration'];

            echo '<div class="offer-card2">';
            echo '<input type="radio" id="offer" name="offer" value="' . $offerID . '">';
            echo '<div class="quantityInput" id="quantityInputContainer_' . $offerID . '" style="display: none;">';
            echo '<label for="quantity">Quantity:</label>';
            echo '<input type="number" id="quantity_' . $offerID . '" name="quantity" min="1" max="10" value="1" ></div>';
            echo '<img class="offreimg" src="' . $offerImagePath . '" alt="' . $offerTitle . '">';
            echo '<div class="offer-details">';
            if (!empty($offerTitle)) {
                echo '<h2 id="title_' . $offerID . '" data-title="' . $offerTitle . '">' . $offerTitle . '</h2>';
            }
            echo '<p  id="price_' . $offerID . '" class="price" data-price="' . $offerPrice . '">' . $offerPrice . ' DH</p>';
            if (!empty($offerDuration)) {
                echo '<h3 class="duration"  id="duration_' . $offerID . '" data-duration="' . $offerDuration . '">' . $offerDuration . ' Day</h3>';
            }

            if (!empty($offerKM)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span id="km_' . $offerID . '" data-km="' . $offerKM . '">' . $offerKM . '</span>';
                echo '</div>';
            }

            if (!empty($offerDetail1)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span id="d1_' . $offerID . '" data-d1="' . $offerDetail1 . '">' . $offerDetail1 . '</span>';
                echo '</div>';
            }

            if (!empty($offerDetail2)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span id="d2_' . $offerID . '" data-d2="' . $offerDetail2 . '">' . $offerDetail2 . '</span>';
                echo '</div>';
            }

            if (!empty($offerDetail3)) {
                echo '<div class="des">';
                echo '<img src="./public//images/check2.png" width="30px">';
                echo '<span id="d3_' . $offerID . '" data-d3="' . $offerDetail3 . '">' . $offerDetail3 . '</span>';
                echo '</div>';
            }

            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No offers found.";
    }
    mysqli_close($conn);
}








function showorders()
{
    if ($_SESSION['id'] == "1" && $_SESSION['firstname'] == "ADMIN") {

        include 'database.php';
        $conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT o.*, u.first_name, u.last_name, u.email, u.phone
        FROM orders o
        LEFT JOIN users u ON o.user_id = u.id
        ORDER BY o.orderDate DESC";

        $result = mysqli_query($conn, $sql);

        echo '<table class="admintable" >
<thead>
        <tr>
        <th>Order ID</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Phone</th>
        <th>City</th>
        <th>Bike Type</th>
        <th>Rent Duration</th>
        <th>Total</th>
        <th>Bike Quantity</th>
        <th>Rent Date</th>
        <th>Order Date</th>
        <th>Address</th>
        </tr>
 </thead>
 <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['phone'] . '</td>';
            echo '<td>' . $row['city'] . '</td>';
            echo '<td>' . $row['biketype'] . '</td>';
            echo '<td>' . $row['rentduration'] . '</td>';
            echo '<td>' . $row['total'] . '</td>';
            echo '<td>' . $row['bikenbr'] . '</td>';
            echo '<td>' . $row['rentDate'] . '</td>';
            echo '<td>' . $row['orderDate'] . '</td>';
            echo '<td>' . $row['Address'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</tbody>';
    } else {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM orders WHERE (user_id = '$id') ORDER BY orderDate DESC";
        include 'database.php';
        $conn = mysqli_connect($bd_server, $bd_user, $bd_pass, $bd_name);
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<table >
        <thead>
                <tr>
                    <th>Order ID</th>
                    <th>City</th>
                    <th>Bike Type</th>
                    <th>Rent Duration</th>
                    <th>Bike Number</th>
                    <th>Address</th>
                    <th>Rent Date</th>
                    <th>Total</th>
                    <th>Order Date</th>
                </tr>
         </thead>
         <tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['city'] . '</td>';
                echo '<td>' . $row['biketype'] . '</td>';
                echo '<td>' . $row['rentduration'] . '</td>';
                echo '<td>' . $row['bikenbr'] . '</td>';
                echo '<td>' . $row['Address'] . '</td>';
                echo '<td>' . $row['rentDate'] . '</td>';
                echo '<td>' . $row['total'] . ' DH</td>';
                echo '<td>' . $row['orderDate'] . '</td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
