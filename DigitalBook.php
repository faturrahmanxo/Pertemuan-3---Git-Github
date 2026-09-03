<?php

require_once "Book.php";

class DigitalBook extends Book
{
    public function download(): string
    {
        return "Digital book downloaded: " . $this->title;
    }
}
