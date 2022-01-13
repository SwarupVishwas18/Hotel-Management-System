<?php

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $tags = $_POST['tags'];
    $price = $_POST['price'];
    include('connect.php');

    $sql = "INSERT INTO dishes (DishName, tag, price) VALUES ('$name', '$tags', '$price')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Dish added Successfully'); </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dishes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidenav.css">

    <style>
        .main {
            /* background-color: rgb(66, 36, 10); */
            color: black;
            width: 100%;
            height: 60vh;
        }

        .glass {
            padding-top: 5rem;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        form input {
            font-size: large;
            display: block;
            text-align: center;
            /* border: none; */
            margin: .2rem;
            padding: .5rem;
        }


        .sub {
            padding: .5rem 5.5rem;
            background-color: greenyellow;
            border: none;
        }

        .sub:hover {
            background-color: chartreuse;
        }
    </style>
</head>

<body>
    <?php
    include('nav.php');
    include('sidenav.php');
    ?>
    <div class="main">
        <div class="glass">
            <div class="pop">
                <h1>Add Dishes</h1>
                <br>
            </div>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>


            <form action="addDishes.php" method="post" class="form">

                <input type="text" name="name" placeholder="DishName" autocomplete="off" required><br><br>
                <input type="text" name="tags" placeholder="Tags" autocomplete="off" required><br><br>
                <input type="number" name="price" placeholder="Price" autocomplete="off" required><br><br>
                <input type="submit" name="submit" class="sub" value="Submit">

                <br>
            </form>
        </div>
    </div>

    <footer>&copy; Hotel Matoshri 2022</footer>

</body>

</html>