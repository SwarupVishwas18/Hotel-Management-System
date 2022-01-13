<?php
if (isset($_POST['submit'])) {
    include('connect.php');
    $dishName = $_POST['name'];
    $price = $_POST['price'];
    $date = date("Y-m-d");
    $qty = $_POST['qty'];
    $address = $_POST['address'];
    $amt = (int)$price * (int)$qty;
    include('nav.php');



    $sql = "INSERT INTO `order`(`id`, `dishName`, `qty`, `rate`, `addresss`, `amt`, `orderdate`, `custName`) VALUES (null,'$dishName',$qty,'$price','$address','$amt','$date','$sess_name')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
    alert('Dish added Successfully');
    </script>";
        header('Location: ./viewOrder.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
