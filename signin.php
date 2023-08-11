<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
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
<h1>Sign in</h1>
<?php if (isset($_GET['error'])){ ?>
<p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<form class="form1" action="./process_signin.php" method="post" >
    <div class="txt">
    <input name="email" placeholder=" " type="text" required>
    <span></span>
    <label for="email">Mobile number or email</label>
    </div>

    <div class="txt">
    <input name="password" placeholder=" " type="password" required>
    <span></span>
    <label for="password">Password</label>
    </div>

    <div class="pass"><a href="/">Forgot password?</a></div>

    <input type="submit" name="submit" value="Log in">

    <div class="signup">New to POGO? <a href="./index.php">sign up now</a></div>
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
});
</script>

</body>
</html>