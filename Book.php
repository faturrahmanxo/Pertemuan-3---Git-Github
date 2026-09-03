<?php

class Book
{
    public string $title;
    public string $author;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo()
    {
        return "Judul:" . $this->title . "\n"
            . "Author: " . $this->author;
    }

    public function borrow()
    {
        return "Book borrowed: " . $this->title;
    }
}

