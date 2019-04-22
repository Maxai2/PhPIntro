<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abstractions\IBooksService;

class BooksController extends Controller {

    private $booksService;

    function __construct(IBooksService $service) {
        $this->booksService = $service;
    }

    public function index() {
        $books = $this->booksService->get();

        return view('index')->with('books', $books);
    }

    public function find($id) {
        $book = $this->booksService->find($id);

        return view('details')->with('book', $book);
    }
}
