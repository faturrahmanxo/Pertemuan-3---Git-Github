<?php
require_once "Book.php";

class DigitalBook extends Book
{
    public string $fileName;
    public string $fileSize;

    public function __construct(string $title, string $description, string $author, int $year, string $fileName, string $fileSize)
    {
        parent::__construct($title, $description, $author, $year);
        $this->fileName = $fileName;
        $this->fileSize = $fileSize;
    }

    public function download(): string
    {
        return "Download file " . $this->fileName . " (" . $this->fileSize . ")\n\n";
    }
}
