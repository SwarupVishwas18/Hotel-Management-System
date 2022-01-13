<?php
if (isset($_POST['submit'])) {
    $pwd = $_POST['pwd'];

    if ($pwd === 'Error@123') {
        header('Location: ./viewDishes.php');
    } else {
        echo "<script> alert('Incorrect Password..!!'); </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminLogin.css">
</head>

<body>
    <div class="main">
        <div class="glass">
            <h1>Hello Admin</h1>
            <form action="adminLogin.php" method="post">
                <input type="password" placeholder="Password" name="pwd" id="pwd">
                <input type="submit" value="Submit" class="sub" name="submit">
            </form>
        </div>
    </div>


</body>

</html>