<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abstractions\IBooksService;
use App\Http\Requests\CreateBookRequest;

class BooksController extends Controller {

    private $booksService;

    function __construct(IBooksService $service) {
        $this->booksService = $service;
    }

    public function index() {
        $books = $this->booksService->get();

        return view('books.index')->with('books', $books);
    }

    public function find($id) {
        $book = $this->booksService->find($id);

        return view('books.details')->with('book', $book);
    }

    public function create() {
        return view('books.create');
    }

    // Request
    public function store(CreateBookRequest $request) {

        $validated = $request->validated();

        Book::create($validated);
        return redirect('books');

        // $input = $request->all();
        // dd($input);
        // Book::create($input);

        // $title = $request->input('title');
        // $author = $request->input('author');

        // Book::create([
        //     'title' => $title,
        //     'author' => $author
        // ]);

        // $book = new Book([
        //     'title' => $title,
        //     'author' => $author
        // ]);

        // $book->save();
    }
}
