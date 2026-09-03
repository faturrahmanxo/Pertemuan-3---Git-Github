<?php
require_once "Book.php";
require_once "DigitalBook.php";
require_once "Member.php";

echo "=== DATA BUKU AWAL ===\n";
$book1 = new Book("Dasar Pemrograman Web", "Buku tentang dasar pemrograman web", "Bang Dimas", 2016);
$book2 = new Book("Dasar Pemrograman Aplikasi", "Buku tentang dasar pemrograman aplikasi", "Bang Owi", 2018);
$digitalBook = new DigitalBook("Mastering Laravel 11", "Buku panduan Laravel", "Taylor Otwell", 2024, "laravel_13.pdf", "20MB");

echo $book1->getInfo();
echo $digitalBook->getInfo();
echo $digitalBook->download();


echo "=== SIMULASI PEMINJAMAN ===\n";
$member1 = new Member(1, "Fatur");
$member2 = new Member(2, "Budi");

echo "[Fatur mulai meminjam]\n";
$member1->borrowBook($book1)->borrowBook($book2);

echo "\n[Budi mulai meminjam]\n";
$member2->borrowBook($book1);


echo "\n=== HASIL AKHIR ===\n";
echo $member1->getInfo();
echo $member2->getInfo();
echo $book1->getInfo();
