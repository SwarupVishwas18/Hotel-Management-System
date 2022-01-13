<?php

if (isset($_POST['submit'])) {

    session_start();

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $repass = $_POST['c_pass'];
    $name = $_POST['name'];
    include('connect.php');



    $passreg = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/";

    if (!preg_match($passreg, $pass)) {

        //  TODO :    Create Invalid Password By Rules Warning..!!   DONE ..

        header("Location: ./join.php?error=Invalid Password By Rules..!!");
        exit();
    } else {

        if ($pass != $repass) {
            //   TODO :     Create "Mismatch Password..!!" Warning   ..DONE

            header("Location: ./join.php?error=Both Password are mismatched..!!");
            exit();
        }

        $qry = "SELECT email FROM user WHERE email='$mail'";

        $dup = mysqli_query($conn, $qry);

        if (mysqli_num_rows($dup) > 0) {
            //   TODO :     Create "Email Already Taken..!!" Warning  ..DONE

            header("location: ./join.php?error=Email is already taken..!!");
            exit();
        } else {
            $subPass = md5($pass);
            $sql = "INSERT INTO user (pwd, email, username) VALUES ('$subPass', '$mail', '$name')";

            if (mysqli_query($conn, $sql)) {
                $_SESSION['name'] = $name;
                $_SESSION['mail'] = $mail;
                header('Location: ./main.php?mail=$mail&name=$name');
                // header('Location: index.html');
                // exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
} else {
    // header('Location: ./cont.php');
    echo "Not posible dude";
}
