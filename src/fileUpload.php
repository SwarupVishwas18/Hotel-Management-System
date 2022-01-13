<?php

?>
<?php
$msg = "";
include('connect.php');

// If upload button is clicked ...
if (isset($_POST['submit'])) {

    $filename = $_FILES['uploadfile']["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "gallery/" . $filename;


    // Get all the submitted data from the form
    $sql = "INSERT INTO gallery (filename) VALUES ('$filename')";

    // Execute query
    mysqli_query($conn, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<script> alert('Image added'); </script>";
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }


    header('Location: ./addImages.php');
}
?>
