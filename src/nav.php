<?php
error_reporting(0);
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['mail'])) {
    $sess_name = $_SESSION['name'];
    $sess_mail = $_SESSION['mail'];
?>

    <div class="banner">
        <ul class="links">
            <li class="link"><a href="index.php">Home</a></li>
            <li class="link"><a href="abtus.php">About Us</a></li>
            <li class="link"><a href="gallery.php">Gallery</a></li>
            <li class="link"><a href="main.php">Hello <?php echo $sess_name ?></a></li>
        </ul>
        <div class="logo">Hotel Matoshri</div>

    </div>

<?php
} else {
?>
    <div class="banner">
        <ul class="links">
            <li class="link"><a href="index.php">Home</a></li>
            <li class="link"><a href="abtus.php">About Us</a></li>
            <li class="link"><a href="gallery.php">Gallery</a></li>
            <li class="link"><a href="join.php">Join</a></li>
        </ul>
        <div class="logo">Hotel Matoshri</div>

    </div>
<?php

}
?>