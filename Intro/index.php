<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php

    // fprintf(fopen("file.txt", "a"), $_POST["message"]);

    // laravel

    echo 'Hello, World!';
    printf("sdf </br> %s sf %s", 56, 23);
//----------------------------
    $a = 0;
    $b = 10;
    $c = $a + $b;

    echo "</br> $c "." 123";
//----------------------------
    define("Pi", 3.14);

    echo Pi;
//---------------------------
    $name = 'qwer';
    unset($name);
//---------------------------
    true <=> true;   //  0
    true <=> false;  //  1
    false <=> true;  // -1
    false <=> false; //  0

    ?>
<!----------------------------------------->

<?php
    $auth = $_GET['auth'] == 'false';
?>

<div>
    <?php if ($auth): ?>
        <div>Log Out</div>
    <?php else: ?>
        <div>Log In</div>
    <?php endif; ?>
</div>

</body>
</html>
