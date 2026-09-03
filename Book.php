<?php

class Book
{
    protected string $title;
    protected string $description;
    protected string $author;
    protected int $year;
    protected bool $borrowed; 

    public function __construct(string $title, string $description, string $author, int $year)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
        $this->year = $year;
        $this->borrowed = false;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isBorrowed(): bool
    {
        return $this->borrowed;
    }

    public function getInfo(): string
    {
        $status = $this->borrowed ? "Dipinjam" : "Tersedia";
        return "Judul: " . $this->title . "\n"
            . "Deskripsi: " . $this->description . "\n"
            . "Author: " . $this->author . "\n"
            . "Tahun: " . $this->year . "\n"
            . "Status: " . $status . "\n\n";
    }

    public function borrow(): string
    {
        $this->borrowed = true;
        return "Berhasil meminjam buku: " . $this->title;
    }
}
