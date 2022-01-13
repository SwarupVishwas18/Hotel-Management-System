<?php

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $comment = $_POST['comment'];
    include('connect.php');

    $sql = "INSERT INTO `contact`(`id`, `name`, `mail`, `comment`) VALUES (null,'$name','$mail','$comment')";

    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Comment added Successfully'); </script>";
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
    <title>Contact Us</title>
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
                <h1>Contact Us</h1>
                <br>
            </div>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>


            <form action="contact.php" method="post" class="form">

                <input readonly type="text" name="name" value="<?php echo $sess_name; ?>" autocomplete="off" required><br><br>
                <input readonly type="mail" name="mail" value="<?php echo $sess_mail; ?>" autocomplete="off" required><br><br>
                <textarea name="comment" placeholder="Your Comment" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" class="sub" value="Submit">

                <br>
            </form>
        </div>
    </div>

</body>

</html>