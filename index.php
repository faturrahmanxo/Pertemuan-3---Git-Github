<?php

require_once "Book.php";
require_once "DigitalBook.php";

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
