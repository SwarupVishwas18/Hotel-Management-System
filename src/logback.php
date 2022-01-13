<?php

if (isset($_POST['submit'])) {

    session_start();


    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    include('connect.php');
    $password = md5($pass);

    $sql = "SELECT * FROM user WHERE email='$mail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $mail && $row['pwd'] === $password) {
            $_SESSION['mail'] = $mail;
            $_SESSION['name'] = $row['username'];
            echo $_SESSION['name'];
            header('Location: ./main.php');
        } else {
            header('Location: ./log.php?error=Incorrect Password or Mail');
            exit();
        }
    } else {
        header('Location: ./log.php?error=Mail is not Registred');
        exit();
    }
} else {
    // header('Location: ./cont.php');
    echo "Not posible dude";
}
