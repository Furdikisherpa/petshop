<div class="space"></div>
<div class="header">
    <a href="Index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <?php
    // Start or resume session
    if (session_status() == PHP_SESSION_NONE) {
        session_start(); // Start the session if it's not already started
    
    }
    // Check if user is logged in
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        // If logged in, display "Profile" button
        echo '<a href="profile.php"><button class="btn_profile">Profile</button></a>';
    } else {
        // If not logged in, display "Login" button
        echo '<a href="loginform.php"><button class="btn_signup">Login</button></a>';
    }
    ?>
    <a href="cart_display.php"><button class="btn_cart"><img src="images/cart.png" alt="" width="25px"></button></a>
    <a href="shop.php"><button class="btn_shop">Shop Now</button></a>
    <!-- <button class="btn_signup">Sign Up</button> -->
</div>
<div class="logo">
    <img src="images/petshoplogo1.png" alt="" width="400px">
</div>


