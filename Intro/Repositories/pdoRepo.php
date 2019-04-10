<?php
    set_exception_handler(function(\Exception $ex) {
        echo 'GLOBAL EXCEPTION HANDLER';
    });

    set_error_handler(function(\Error $ex) {
        echo 'GLOBAL ERROR HANDLER';
    });

    $pdo = new PDO('mysql:host=localhost;dbname=BooksDb', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $insertQuery = "INSERT INTO `Authors`(`name`, `surname`, `nickname`)
        VALUES ('asdf', 'cvb', 'zvv');";

        try {
            $pdo->query($insertQuery);
        } catch (\Throwable $th) {
            $msg = $th->getMessage();
            echo "Exception, invalid data: $msg <br>";
        }

    $createDb = 'CREATE TABLE IF NOT EXISTS `Authors`(
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `name` VARCHAR(255) NOT NULL,
        `surname` VARCHAR(255) NOT NULL,
        `nickname` VARCHAR(255)
    );';
    $db->exec($createDb);
    
    try {
        $books = $pdo->query('SELECT * FROM books');
        if (!$books)
            throw new \Error("sorry");

        while($row = $books->fetch(PDO::FETCH_ASSOC)) {
            var_dump($row[]);
            echo '<br>';
        }
    } catch(\Throwable $ex) {
        echo $ex->getMessage();
    } finally {
        if ($books instanceof PDOStatement) {
            $books->closeCursor();
        }
        unset($pdo);
    }

?>