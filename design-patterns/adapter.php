<?php

echo "Adapter Patter. <pre>";

// Converts the interface of the class to another interface client expects.
// Adapter is like adapting, creating an intermediary abstraction that translates or maps
// the old component to the new system.
// Adapter functions as a wrapper or modify an existing class.


class OldBook {
    private $name;

    public function __construct($name, $author) {
        $this->name = $name;
        $this->author = $author;
    }

    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }
}

class BookAdapter {
    private $book;

    public function __construct(OldBook $oldBook) {
        $this->book = $oldBook;
    }

    public function showNameAndAuthor() {
        return 'Name: ' . $this->book->getName() . ' authored By' . $this->book->getAuthor();
    }
}


$book = new OldBook('book1', 'author');

$bookAdapter = new BookAdapter($book);
var_dump($bookAdapter->showNameAndAuthor());


