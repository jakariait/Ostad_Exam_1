<?php

class Book
{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title           = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook()
    {
        $this->availableCopies++;
    }
}

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook($book)
    {
        return $book->borrowBook();
    }

    public function returnBook($book)
    {
        return $book->returnBook();
    }
}

// Creating 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows Book 1
$member1->borrowBook($book1);

// Member 2 borrows Book 2
$member2->borrowBook($book2);

echo "Avalailble copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()} <br>";
echo PHP_EOL;
echo "Avalailble copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()} <br>";
