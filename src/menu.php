<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Menu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidenav.css">
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            border: 1px solid #ddd;
            margin-top: 5rem;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    include('nav.php');
    include('usersidenav.php');
    include('connect.php');
    ?>
    <table>
        <tr>
            <td>Dish Name</td>
            <td>Price</td>
            <td>Category</td>
            <td>Order</td>
        </tr>

        <?php


        $records = mysqli_query($conn, "select * from dishes"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['DishName']; ?></td>
                <td><?php echo $data['Price']; ?></td>
                <td><?php echo $data['tag']; ?></td>


                <td><a href="addOrder.php?id=<?php echo $data['id']; ?>">Add Order</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <footer>&copy; Hotel Matoshri 2022</footer>
</body>

</html>