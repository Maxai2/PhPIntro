<?php
    namespace App\Abstractions;

    interface IBooksService {
        public function get();
        public function find(int $id) : string;
    }
?>
