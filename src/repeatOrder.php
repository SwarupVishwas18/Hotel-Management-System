<?php

if (isset($_GET['id'])) {
    include('connect.php');
    $id = $_GET['id'];

    $sql = "SELECT * FROM `order` WHERE `id`=$id";
    $rec = mysqli_query($conn, $sql)
        or die(mysqli_error($conn));

    while ($info = mysqli_fetch_array($rec)) {
        $dish_name = $info['dishName'];
    }

    $query = "SELECT * FROM `dishes` WHERE `DishName` = '$dish_name'";
    $records = mysqli_query($conn, $query)
        or die(mysqli_error($conn)); // fetch data from database


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Order</title>
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

            form input,
            textarea {
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
        include('usersidenav.php');
        ?>
        <div class="main">
            <div class="glass">
                <div class="pop">
                    <h1>Add Order</h1>
                    <br>
                </div>

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>


                <form action="added.php" method="post" class="form">

                    <?php
                    while ($data = mysqli_fetch_array($records)) {
                        $dishName = $data['DishName'];
                        $price = $data['Price'];
                    ?>
                        <input readonly type="text" name="name" value="<?php echo $dishName; ?>" autocomplete="off" required><br><br>
                        <input type="number" name="qty" placeholder="Quantity" autocomplete="off" required><br><br>
                        <input type="number" name="price" value="<?php echo $price; ?>" readonly autocomplete="off" required><br><br>
                        <textarea name="address" placeholder="Enter the Address" id="" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" name="submit" class="sub" value="Submit">
                    <?php
                    }
                    ?>
                    <br>
                </form>
            </div>
        </div>
    </body>

    </html>

<?php
}
?>