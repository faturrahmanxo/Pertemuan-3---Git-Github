<?php
require_once "Book.php";

class Member
{
    private int $id;
    private string $name;
    private array $borrowedBooks = [];

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getInfo(): string
    {
        $bookList = empty($this->borrowedBooks) ? "Tidak ada" : implode(", ", $this->borrowedBooks);

        return "ID: " . $this->id . "\n"
            . "Nama: " . $this->name . "\n"
            . "Buku yang dipinjam: " . $bookList . "\n\n";
    }

    public function borrowBook(Book $book): self
    {
        if (!$book->isBorrowed()) {
            echo $book->borrow() . "\n";
            $this->borrowedBooks[] = $book->getTitle();
        } else {
            echo "Gagal: Buku '" . $book->getTitle() . "' sedang dipinjam orang lain.\n";
        }
        return $this;
    }

    public function getBorrowedBooks(): array
    {
        return $this->borrowedBooks;
    }
}
