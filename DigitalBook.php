<?php

require_once "Book.php";

class DigitalBook extends Book
{
    public function download(): string
    {
        return "Digital book downloaded: " . $this->title;
    }
}




$book = new Book(
    "The Great Gatsby",
    "F. Scott Fitzgerald"
);

echo $book->getInfo();
echo "\n";
echo $book->borrow();

echo "\n\n";

$digitalBook = new DigitalBook(
    "The Great Gatsby",
    "F. Scott Fitzgerald"
);

echo $digitalBook->getInfo();
echo "\n";
echo $digitalBook->download();
