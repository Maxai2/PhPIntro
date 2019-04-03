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
//---------------------------

    $arr = array("asdf", "sdafd", "sdfa");
    $arr[] = "sdaf";
    for ($i=0; $i < count($arr); $i++) { 
        echo "{$arr[$i]}<br/>";
    }

    $arr = array(
        "asdf" => "asd",
        "sdafd" => "asdf",
        "sdfa" => "asdfd");

    $arr['asdf'] = 'Phalanger';
    unset($arr['asdf']);
    foreach ($arr as $key => $value) {
        echo "$key knows $val <br/>";
    }
    print_r($arr);
    var_dump($arr);
    $arr = array_values($arr); // for reset index

//------------------------------------------------------

    function foo(string $name, int $age): string {
        return "$name of $age years";
    }

    function foo1(int &$age) {
        $age = 10;
    }

    $f = 'foo';
    $a = 0;
    $f($a);
    echo $a;

    ?>
<!----------------------------------------->

<?php 

$str = "asdfsadf sadf sadf asdf sadf sd";
$words = explode(' ', $str);
$glued = implode('_', $words);

//------------------------------------------


$di = new DirectoryIterator("C:/");
while($di->valid) {
    
}

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
