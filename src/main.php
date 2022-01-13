<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidenav.css">
    <style>
        .greet {
            text-align: center;
            margin-top: 5rem;
        }

        .sub {
            padding: .5rem 5.5rem;
            background-color: orange;
            border: none;
            font-weight: bold;
        }

        .sub:hover {
            background-color: orangered;
        }
    </style>

</head>

<body>
    <?php include('nav.php');
    include('usersidenav.php');
    ?>

    <h1 class="greet">
        <?php
        echo "Hello, " . $sess_name;
        echo "<br>Check the nav bar for browing thorugh variou tabs";
        echo "<br> Click on Logout button to log out";
        ?>
        <br>
        <a href="./logout.php">
            <button class="sub">Log Out</button>
        </a>
    </h1>
    <footer>&copy; Hotel Matoshri 2022</footer>
</body>

</html>