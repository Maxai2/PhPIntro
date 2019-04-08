<?php 
require_once './Models/oop.php'; // #include <iostream>
use Models\Book;          // using namespace std;

require_once './Repositories/repository.php';
use Data\MySqlRepository;

// $book = new Book('adasdas', 'ASDS');

$repo = new MySqlRepository();
$books = $repo->get();

foreach ($books as $book) {
    echo $book;
} 

?>