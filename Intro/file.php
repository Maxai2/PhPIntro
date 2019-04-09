<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php 
    var_dump($_FILES);
?>

<?php
    // echo phpinfo(); // phpversion();

    if (isset($_FILES['upload'])) {
        @mkdir('uploads'); // if exist

        $c = count($_FILES['upload']['name']);
        for ($i=0; $i < $c; $i++) { 
            $source = $_FILES['upload']['tmp_name'][$i];
            $dest = 'uploads/'.$_FILES['upload']['name'][$i];
            copy($source, $dest);
        }

        // copy($_FILES['upload']['tmp_name'], 'uploads/'.$_FILES['upload']['name']);
    }
?>

<p>Upload your file</p>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload[]" multiple>  <!-- for multiple select file -->
    <br>
    <input type="submit" value="Upload">
</form>

<?php
    if (isset($_FILES['upload'])) {
        echo "<img src='$dest' style='width: 200px;'>";
    }
?>

</body>
</html>