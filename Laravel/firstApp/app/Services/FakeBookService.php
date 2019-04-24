<?php
    namespace App\Services;

    use App\Abstractions\IBooksService;
    use App\Models\Book;

    class FakeBookService implements IBooksService {
        // private $books;
        // public function __construct() {
        //     $this->books = [
        //         'CLR via Falanger',
        //         'Pro Laravel.Net Core MNC 2',
        //         'PHP# in deep'
        //     ];
        // }

        // public function get() : array {
        //     return $this->books;
        // }

        // public function find(int $id) : string {
        //     if (isset($this->books[$id])) {
        //         return $this->books[$id];
        //     }
        //     return null;
        // }

        public function get() {
            return Book::all();
        }

        public function find(int $id) : string {
            return Book::find($id);
        }
    }
?>
