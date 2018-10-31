<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file upload</title>
    <style>
        body {
            background: #efefef;
            font-family: arial;
            }
        #wrap {
            width: 900px;
            margin: 20px auto;
            padding: 20px;
            border: 6px solid #ddd;
            background: #fff;
            }
         #gallery img {
            width: 200px;
            margin: 10px;
            }
        #form {
            margin-top: 20px;
            padding: 10px;
            background: #efefef;
            border-top: 2px solid #ddd;
            }

    </style>
</head>
<body>
    <div id="wrap">
        <div id="gallery">
            <?php
                $list = scandir("img");
                for($i=2; $i < count($list); $i++){
                    $name = $list[$i];
                    echo "<img src= 'img/$name' width='200'>";
                }
            ?>
        </div>

        <div id="form">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="photo">Choose Photo</label>
                    <input type="file" name="photo" id="photo">
                    <input type="submit" value="Upload">
                </form>
        </div>
    </div>
</body>
</html>