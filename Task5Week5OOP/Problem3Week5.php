<?php
//I will solve problem in page 4 in oop tasks 3
class Author2 {
    // Private fields
    private string $name;
    private string $email;
    public function __construct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function toString(): string {
        return "Author[name={$this->name},email={$this->email}]";
    }
}
class Book3{
    private string $isbn;
    private string $name;
    private Author2 $author;
    private int $price;
    private int $qty =0;
    public function __construct(string $isbn, string $name, Author2 $author, int $price, int $qty)
    {
        $this->isbn = $isbn;
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): Author2
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }
    public function getAuthorName(): string{
        return $this->author->getName();
    }
    public function toString1(): string {
        return "Book[name=$this->name, ".$this->author->toString().",price= $this->price,qty= $this->qty]";
    }
}
$a3=new Author2("Hazem","hazem.hussein@gmail.com");
$b3=new Book3("SH-395","Mohamed Zayd",$a3,3122,5);
echo $b3->toString1();

