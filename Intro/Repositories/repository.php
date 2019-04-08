<?php

namespace Data;
require_once './Models/oop.php';
use \Models\Book;

interface IRepository {
    function get(): array;
    function find(int $id): Book;
    function insert(Book $book): bool;
    function delete(int $id): bool;
    function update(Book $book): bool;   
}

class MySqlRepository implements IRepository {
    private $__db;

    public function __construct() {
        $this->__db = mysqli_connect('localhost', 'root', '', 'BooksDb'); // host, login, pswd, db name
    }

    public function get(): array {
        $query = 'SELECT * FROM books';
        $res = mysqli_query($this->__db, $query);

        $books = [];
        while($row = mysqli_fetch_array($res)) {
            $books[] = new Book(
                $row['title'],
                $row['author'],
                $row['id']
            );
        }

        return $books;
    }

    function find(int $id): Book {}
    function insert(Book $book): bool {
        // $title = $book->title;
        // $author = $book->author;
        $title = trim($_POST['author']);
        $title = strip_tags(mysqli_real_escape_string(
            $this->__db, $title
        ));

        $author = trim($_POST['author']);
        $author = strip_tags(mysqli_real_escape_string(
            $this->__db, $author
        ));
        $query = "INSERT INTO books(title, author) VALUES('$title', '$author')";
        // <<<'STR'
        //     INSERT INTO books(title, author) VALUES('$title', '$author')
        // STR;

        mysqli_query($this->__db, $query);
        return mysqli_errno($this->__db) == 0;
    }
    function delete(int $id): bool {}
    function update(Book $book): bool {}
}

?>