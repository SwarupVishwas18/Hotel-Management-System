<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matoshri Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&family=Cormorant+Garamond&family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Cormorant Garamond',
                serif;
        }

        .banner {
            font-family: 'Cinzel Decorative',
                cursive;
        }
    </style>
</head>

<body>
    <?php
    include('nav.php');
    ?>

    <section class="features">
        <h1>Our Features</h1>
        <ul class="ftrs">
            <a href="#">
                <li class="card">
                    <img src="img/dosa.jpg" width="500" height="200px" alt="">
                    <div class="contents">Order Parcel</div>
                </li>
            </a>
            <a href="#">
                <li class="card">
                    <img src="img/paneer.jpg" width="500" height="200px" alt="">
                    <div class="contents">Check Your Parcel History</div>
                </li>
            </a>
            <a href="#">
                <li class="card">
                    <img src="img/snacks.jpg" width="500" height="200px" alt="">
                    <div class="contents">And some for Admin</div>
                </li>
            </a>
        </ul>
    </section>


    <footer>&copy; Hotel Matoshri 2022</footer>

    <script src="script.js"></script>
</body>

</html>