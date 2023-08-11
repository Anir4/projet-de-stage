<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['firstname'])) 
{
  header("location: home.php");
            exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" href="./public/images/favicon.ico">
    <link rel="stylesheet" href="./public/styles/style.css">
</head>
<body>
    <div class="menuContainer">
        <div class="menu">
            <a href="https://pogo.vercel.app/" target="_blank" class="logo">
                <img src="./public/images/pogo.png" alt="logo de pogo people on the go" width="150px" height="40px"></img>
            </a>
            <ul>
                <a href="https://pogo.vercel.app/">
                    <li>
                        Accueil
                    </li>
                </a>

                <a href="/apropos">
                    <li>À propos </li>
                </a>
                <a href="/comment">
                    <li> Comment ça marche</li>
                </a>

                <a href="/tarif">
                    <li> Nos tarifs </li>
                </a>
                <a href="/contact">
                    <li>Contactez-nous </li>
                </a>
            </ul>

        </div>

    <div class="mobileMenu">
      <a href="https://pogo.vercel.app/" target="_blank" class="logo">
        <img src="./public/images/pogo.png" alt="logo de pogo people on the go" width="150px" height="40px"></img>
      </a>
      <button class="toggleMenuButton">&#9776;</button>
    </div>

      <ul class="mobileMenuList">
        <a href="https://pogo.vercel.app/">
          <li>
            Accueil
          </li>
        </a>
        <a href="/apropos">
          <li>À propos </li>
        </a>
        <a href="/comment">
          <li> Comment ça marche</li>
        </a>
        <a href="/tarif">
          <li> Nos tarifs </li>
        </a>
        <a href="/contact">
          <li>Contactez-nous </li>
        </a>
      </ul>
  </div>


<div class="box">
<h1>Sign up</h1>
<?php if (isset($_GET['error'])){ ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<form class="form" action="process_signup.php" method="post">
    <div class="txt">
    <input name="firstname" placeholder=" " type="text" required>
    <span></span>
    <label for="firstname">First name</label>
    </div>

    <div class="txt">
    <input name="lastname" placeholder=" " type="text" required>
    <span></span>
    <label for="lastname">Last Name</label>
    </div>

    <div class="txt">
        <input name="phone" type="tel" placeholder=" " pattern="[0-9]{10}" required >
        <span class="sp"></span>
        <label for="phone">Phone Number</label>
        </div>

    <div class="txt">
        <input name="date" style="width:163px;" class="date" type="text" placeholder=" " onfocus="this.type='date'" onblur="this.type='text'" max="2020-12-31" min="1905-01-01" required >
        <span class="sp"></span>
        <label for="date">Birth Date</label>
        </div>
    
    <div class="txt">
            <input name="email" placeholder=" " type="email" required>
            <span class="sp"></span>
            <label for="email">Email</label>
            </div>

    <div class="txt">
            <input name="Password" placeholder=" " type="password" required>
            <span></span>
            <label for="Password">Password</label>
            </div>
    <input type="submit" value="Register">

    <div class="signup">Already have an account? <a href="./signin.php">sign in</a></div>
</form>

</div>

<script>
const toggleMenuButton = document.querySelector(".toggleMenuButton");

toggleMenuButton.addEventListener("click", () => {
  const mobileMenuList = document.querySelector(".mobileMenuList");

  if (window.matchMedia("(max-width: 768px)").matches) {
    if (mobileMenuList.style.display === "flex") {
        mobileMenuList.style.display = "none";
    } else {
        mobileMenuList.style.display = "flex";
    }
  }
});</script>

</body>
</html>

