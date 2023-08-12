<?php
session_start();
include './includes/display.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
    <link rel="icon" href="./public/images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./public/styles/style3.css">
    <link rel="stylesheet" href="./public/styles/style2.css">
    <script src="./public/js/rental.js"></script>

</head>

<body>

    <section class="section">
        <div class="side-menu">
            <img src="./public/images/pogo.png" alt="logo de pogo people on the go" width="150px" height="40px"">
    <nav>
      <ul>
        <li><a href="./home.php">Home</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Rental History</a></li>
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
        <li><a href="#">Rental History</a></li>
        <li><a href="#">Tracking</a></li>
        <li><a href="#">Account Settings</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="./logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</div>

        <div class="main-content">
            <header style="text-align: center;">
            <button id="mobilemenu" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">&#9776;</button>
                <h1 style="font-size: 2.5rem; font-family: sans-serif;font-variant: small-caps"><strong> Rental </strong></h1>
                <p class="order">
                </p>
            </header>

            <div class="container">
                <section>

                    <!-- STEP 1 -->
                    <div class="step-container" id="step1" style="display: flex;">
                        <div>
                            <h1>Step 1/3 : City &amp; Moto</h1>
                            <label>
                                <h2 style="text-align: center;"> 100% Electric</h2>
                            </label>
                        </div>
                        <label for="city">City</label>
                        <select name="city" id="city">
                            <option value="Marrakech">Marrakech</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Ben guerir">Ben Guerir</option>
                            <option value="Fés">Fés</option>
                        </select>
                        <div class="mototype">
                            <input type="radio" name="type" id="biketype" value="Pogo X" checked="">
                            <br><br>
                            <img src="./public/images/scooter.png" width="200px"><br>
                            <div class="biketype" for="type">POGO X</div>
                            <div>
                                <div class="description">
                                    <div class="des">
                                        <img src="./public//images/check2.png" width="30px">
                                        <span>Autonomie moyenne 50km</span>
                                    </div>
                                    <div class="des">
                                        <img src="./public//images/check2.png" width="30px">
                                        <span>Motos ⚡️ dernière génération </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mototype">
                            <input type="radio" name="type" id="biketype" value="Pogo Z" checked="">
                            <br><br>
                            <img src="./public/images/hawk.png" width="200px"><br>
                            <div class="biketype" for="type">POGO Z</div>

                            <div class="description">
                                <div class="des">
                                    <img src="./public//images/check2.png" width="30px">
                                    <span>Autonomie moyenne 50km</span>
                                </div>
                                <div class="des">
                                    <img src="./public//images/check2.png" width="30px">
                                    <span>Motos ⚡️ dernière génération </span>
                                </div>
                            </div>

                        </div>
                        <div class="buttons" style="justify-content: center;">
                            <button class="next-btn" onclick="nextStep(2)">Next</button>
                        </div>
                    </div>
                    <!-- STEP 2 -->

                    <div class="step-container" id="step2">
                        <div >
                            <h1>Step 2/3: Package</h1>
                        </div>
                        <?php displayoffers("rental"); ?>

                        <div class="buttons">
                            <button class="prev-btn" onclick="prevStep(1)">Previous</button>
                            <button class="next-btn" onclick="nextStep(3)">Next</button>
                        </div>
                    </div>

                    <!-- STEP 3 -->
                        
                    <div class="step-container" id="step3">
                    <div >
                        <h1>Step 3/3: Delivery & Date</h1>
                    </div>
                        <label for="delivery">Delivery:</label>
                        <input type="checkbox" id="delivery" name="delivery">

                        <div id="AddressContainer" style="display: none;width:100%;">
                            <label for="Address">Address:</label>
                            <input type="text" id="Address" name="Address" placeholder="Address">
                        </div>

                        <!-- Rent Date and Time -->
                        <label for="rentDate">Rent Date and Time:</label>
                        <input type="datetime-local" id="rentDate" name="rentDate" value="<?php echo date('Y-m-d\TH:i'); ?>">

                        <!-- Number of Bikes -->
                        <label for="quantity">Number of Bikes:</label>
                        <input type="number" id="bikenbr" name="quantity" min="1" max="10" value="1">

                        <div class="buttons">
                            <button class="prev-btn" onclick="prevStep(2)">Previous</button>
                            <button class="next-btn" onclick="nextStep(4)">Next</button>
                        </div>
                    </div>

                    <!-- STEP 4 -->

                    <div class="step-container" id="step4">
                        <div >
                            <h1>Résumé</h1>
                        </div>
                        <div style="width:-webkit-fill-available;">
                        <label>Informations:</label>
                        <div class="description0">
                            <div style="text-align: left;">
                            <div class="des">
                                <img src="./public//images/check2.png" width="30px">
                                <span>Name: <?php echo $_SESSION['firstname']; ?></span>
                            </div>
                            <div class="des">
                                <img src="./public//images/check2.png" width="30px">
                                <span>Phone: <?php echo $_SESSION['phone']; ?></span>
                            </div>
                            <div class="des">
                                <img src="./public//images/check2.png" width="30px">
                                <span>Email: <?php echo $_SESSION['email']; ?></span>
                            </div>
                            </div>
                        </div>
                        <label>Plan </label>
                        <div id="step4-content"></div>
                        </div>
                        <br>
                        <div class="buttons">
                            <button class="prev-btn" type="button" onclick="prevStep(3)">Previous</button>
                            <button class="confirm-btn" id="confirmButton" type="button">Confirm</button>
                        </div>
                    </div>

                </section>
            </div>
    </section>


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

    <script>
        //DELIVRY ADRESSE
        var deliveryCheckbox = document.getElementById('delivery');
        var additionalAddressContainer = document.getElementById('AddressContainer');

        deliveryCheckbox.addEventListener('change', function() {
            additionalAddressContainer.style.display = this.checked ? 'block' : 'none';
        });

        //OFFER RADIO CHECK
        var packageRadios = document.querySelectorAll('input[name="offer"]');
        packageRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                var offerID = this.value;
                var quantityInputContainer = document.getElementById('quantityInputContainer_' + offerID);
                if (this.checked) {
                    document.querySelectorAll('[id^="quantityInputContainer_"]').forEach(container => {
                        if (container !== quantityInputContainer) {
                            container.style.display = 'none';
                        }
                    });
                    quantityInputContainer.style.display = 'flex';
                } else {
                    quantityInputContainer.style.display = 'none';
                }
            });
        });
        //CONFIRMATION
        document.getElementById("confirmButton").addEventListener("click", function() {confirmation()});



    </script>


</body>

</html>