<?php
    $name = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];
    $type = $_FILES["photo"]["type"];

    if ($type == "image/jpeg" or $type == "image/png" or $type == "image/gif") {
        move_uploaded_file($tmp, "img/$name");
    }
    header("location: fileupload.php");
?>
