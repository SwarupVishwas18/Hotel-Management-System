<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="join.css">
    <style>

    </style>
</head>

<body>
    <div class="main">
        <div class="glass">
            <div class="pop">
                <h1>Log In</h1>

            </div>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>


            <form action="logback.php" method="post" class="form">

                <input type="email" name="mail" placeholder="Email" autocomplete="off" required>
                <input type="password" name="pass" placeholder="Password" autocomplete="off" required>
                <input type="submit" name="submit" class="sub" value="Submit">


            </form>
            <p>
                New Member <a href="join.php">Sign Up</a>
            </p>
            <a href="adminLogin.php" class="login">
                <button class="sub" class="admin-btn">Admin</button>
            </a>
        </div>
    </div>
</body>

</html>