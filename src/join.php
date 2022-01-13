<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
    <link rel="stylesheet" href="join.css">
</head>

<body>
    <div class="main">
        <div class="glass">
            <h1>Sign Up</h1>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form action="joinback.php" method="post" class="form">

                <input type="text" name="name" placeholder="Name" autocomplete="off" required>
                <input type="email" name="mail" placeholder="Email" autocomplete="off" required>
                <input type="password" name="pass" placeholder="Password" autocomplete="off" required>
                <input type="password" name="c_pass" placeholder="Confirm Password" autocomplete="off" required>
                <input type="submit" class="sub" name="submit" value="Submit">


            </form>
            <p>
                Already Member <a href="log.php">Log in</a>
            </p>
        </div>

    </div>
</body>

</html>