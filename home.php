<?php
include './includes/display.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Home Page</title>
  <link rel="icon" href="./public/images/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="./public/styles/style3.css">
  <script src="./public/js/rental.js"></script>

</head>
<body>
  <section class="section">
  <div class="side-menu">
    <img src="./public/images/pogo.png" alt="logo de pogo people on the go" width="150px" height="40px"">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="./rental.php">Rental</a></li>
        <li><a href="#">Tracking</a></li>
        <li><a href="#">Account Settings</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="./logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>

  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
  <div class="offcanvas-header">
  <img src="./public/images/pogo.png" alt="logo de pogo people on the go" width="150px" height="40px">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <nav>
      <ul>
        <li><a href="./home.php">Home</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="./rental.php">Rental</a></li>
        <li><a href="#">Tracking</a></li>
        <li><a href="#">Account Settings</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="./logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</div>

  <div class="main-content">
    <header>
    <button id="mobilemenu" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">&#9776;</button>
      <h1><strong>Welcome,</strong> <?php echo "{$_SESSION['firstname']} {$_SESSION['lastname']}" ?></h1>    
      <p class="order">
      <?php if ($_SESSION['id'] == "1" && $_SESSION['firstname'] == "ADMIN") 
{ ?>
   <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="modifyOffer('')">Add offer</button> <?php } else {?>
      <a href="./rental.php">
    <button>Place an order</button></a>
<?php } ?>
    </p>
    </header>

    <?php if ($_SESSION['id'] == "1" && $_SESSION['firstname'] == "ADMIN") { include './includes/delete_offer.php';
      ?> 


  <div class="container">
  <h2>Promotions and Offers</h2>
    <section class="Promotions">
<?php displayoffers("")?>

    </section>
  </div>

<div class="container">
  <div class="container-header">
      <h2>Orders</h2>
      <div class="txt">
      <input type="text" id="orderSearch" placeholder="Search a user name...">
      <span></span>
      </div>
  </div>
      <?php showorders()?>
</div>

        <?php }else{?>

  <section class="recent-activity">
    <div class="container">
      <h2>recent-activity</h2>
      <?php showorders() ?>
    </div>
  </section>

  <div class="container">
  <h2>Promotions and Offers</h2>
    <section class="Promotions">
<?php displayoffers("")?>

    </section>
  </div>
            <?php } ?>
  </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="text-align: center;">Add an offer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./submit_offer.php" method="post" enctype="multipart/form-data">
      <div class="modal-body">
              <div class="form-group">
              <input type="hidden" name="offerId" id="offerId" >
                <label for="title">Offer Title :</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>

              <div class="form-group">
                <label for="price">Price :</label>
                <input type="text" class="form-control" id="price" name="price" required>
              </div>

              <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
              </div>

              <div class="form-group">
                <label for="duration">Duration (days in numbers):</label>
                <input type="text" class="form-control" id="duration" name="duration" required >
              </div>

              <div class="form-group">
                <label for="km">Kilometre (text) :</label>
                <input type="text" class="form-control" id="km" name="km">
              </div>

              <div class="form-group">
                <label for="detai1l">Detail :</label>
                <input type="text" class="form-control" id="detail1" name="detail1" required>
              </div>
              <div class="form-group">
                <label for="detail2">Detail :</label>
                <input type="text" class="form-control" id="detail2" name="detail2" >
              </div>
              <div class="form-group">
                <label for="detail3">Detail :</label>
                <input type="text" class="form-control" id="detail3" name="detail3" >
              </div>
              
        </div>
      <div class="modal-footer">
        <button type="submit" >Submit</button>
      </div>
      </form> 
    </div>
  </div>
</div>  

  <footer>
    <p>&copy; 2023 POGO. All rights reserved.</p>
    <nav>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </footer>
</body>
<script>
  document.getElementById('orderSearch').addEventListener('keyup', function() {
    const input = this.value.toLowerCase();
    const table = document.getElementById('ordersTable');
    const rows = table.getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) {
      const userCell = rows[i].querySelector('.user-name');
        if (userCell) {
            const userName = userCell.textContent.toLowerCase();
            rows[i].style.display = userName.includes(input) ? '' : 'none';
        }
    }
});
</script>
</html>
<?php
  }else{
 header("location: signin.php");
 exit();
 }
?>