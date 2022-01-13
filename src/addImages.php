<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Images</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidenav.css">
    <link rel="stylesheet" href="files.css">
</head>

<body>
    <?php
    include('nav.php');
    include('sidenav.php');
    ?>

    <form enctype="multipart/form-data" action="fileUpload.php" class="file-input" method="post">
        <input type="file" id="file" class="file" name="uploadfile">
        <input type="submit" name="submit" class="sub" value="Submit">
    </form>


</body>

</html>