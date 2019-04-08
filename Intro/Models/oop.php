<?php
namespace Models;
// trait

class Book {
    private $id;
    private $title;
    private $author;

    public function __construct(string $title, string $author, int $id = -1) {
        $this->author = $author;
        $this->title = $title;
        $this->id = $id;
    }

    public function foo() : void {

    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        throw new \Exception("Undefine property $name");
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __toString() {
        return "$this->id $this->title $this->author";
    }
}

// class Person {
//     function __construct($a) {}

//     function foo() {}
// }

// class Student extends Person implements IUniv {
//     public function __construct($a, $b) {
//         parent::__construct($a);
//         parent::foo();
//     }
// }

// trait DbConnection {
//     public function connect($cstr) {
//         // mysqli_connect(...);
//     }
// }

// class XmlReporter {
//     use DbConnection;
// }

// class JsonReporter {
//     use DbConnection;
// }

// $reporter = new JsonReporter();
// $reporter->connect("Data Source...");

// $book = new Book('asdfasd', 'asdfasfasdfasdfsadf');
// echo "$book->author <br>"; // __get('author');
// echo $book;

?>