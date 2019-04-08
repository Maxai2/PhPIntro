<?php 
    require_once './Models/oop.php';
    require_once './Repositories/repository.php';
    use Data\MySqlRepository;
    use Models\Book;

    $repo = new MySqlRepository();
    if(isset($_POST['title'], $_POST['author'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $book = new Book($title, $author);

        if ($repo->insert($book)) {
            echo 'Book added <br>';
        }
    }
?>

<form method="post" action="add.php">
    <label>Title:</label>
    <input type="text" name="title"> <br>
    <label>Author:</label>
    <input type="text" name="author"> <br>
    <input type="submit" value="add">
</form>

<?php
    $books = $repo->get();

    foreach ($books as $book) {
        echo "$book <br>";
    }
?>