<?php

class Member
{
    public int $id;
    public string $nama;

    public function __construct(int $id, string $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    public function getInfo()
    {
        return "ID: " . $this->id . "\n"
            . "Nama: " . $this->nama;
    }
}

$Member = new Member(1234, "John Herdman");
echo $Member->getInfo();

?>