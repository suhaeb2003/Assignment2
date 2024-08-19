<?php

// Define the Book class
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true; // Successful borrow
        }
        return false; // No copies available
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

// Define the Member class
class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo $this->name . " has borrowed '" . $book->getTitle() . "'.\n";
        } else {
            echo "No copies available for " . $this->name . " to borrow '" . $book->getTitle() . "'.\n";
        }
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        echo $this->name . " has returned '" . $book->getTitle() . "'.\n";
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrow books
$member1->borrowBook($book1); // John Doe borrows "The Great Gatsby"
$member2->borrowBook($book2); // Jane Smith borrows "To Kill a Mockingbird"

// Print available copies
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "\n";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";

?>
