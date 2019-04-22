<?php
    namespace App\Abstractions;

    interface IBooksService {
        public function get() : array;
        public function find(int $id) : string;
    }
?>
