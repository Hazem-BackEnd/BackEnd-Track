<?php
class Author1 {
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
    public function toString2(): string {
        return "Author[name={$this->name},email={$this->email},gender='{$this->gender}']";
    }
}
class Book_{
    private string $name;
    private array $author;
    private float $price;
    private int $qty=0;
    public function __construct(string $name, array $author, float $price, int $qty) {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAuthor(): array
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
    public function toString(): string {
        $temp="";
        foreach ($this->author as $author) {
            $temp .= $author->toString2()." , ";
        }
        return "Book[name=$this->name, ".$temp." price= $this->price,qty= $this->qty]";
    }
    public function getAuthorNames() : string {
        $temp = "";
        foreach($this->author as $author){
            $temp =$temp.$author->getName()." , ";
        }
        return $temp;
    }
}
$a1=new Book_("Zayd",[new Author1("mohamed","test@gmail.com","m"),new Author1("hazem","hazem.t@gmail.com","m")],5566,4);
 echo $a1->toString();

