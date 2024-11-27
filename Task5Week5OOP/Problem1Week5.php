<?php


class Author {
    // Private fields
    private string $name;
    private string $email;
    private string $gender;
    public function __construct(string $name, string $email, string $gender) {
    $this->name = $name;
    $this->email = $email;
    $this->gender = $gender;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function toString(): string {
        return "Author[name={$this->name},email={$this->email},gender='{$this->gender}']";
    }
}

$a1=new Author("TestAuthor","test.author@gmail.com","m");
echo $a1->toString();

/* a Book is written by one and only one Author */
class Book{
    private string $name;
    private Author $author;
    private float $price;
    private int $qty=0;
    public function __construct(string $name, Author $author, float $price, int $qty) {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }
    public function toString1(): string {
        return "Book[name=$this->name, ".$this->author->toString().",price= $this->price,qty= $this->qty]";
    }
}
$b1=new Book("Zayd",$a1,5500,13);
echo "<br>".$b1->toString1();
// in the next problem I will solve "a book can be written by one or more author"