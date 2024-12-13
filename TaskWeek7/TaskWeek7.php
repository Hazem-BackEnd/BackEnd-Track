<?php
namespace TasksWeek7;
class Book7{
    private int $book_id;
    private string $book_author;
    private string $book_name;
    private bool $isAvailable;
    private string $CheckedOut_Date; // the day he took it
    private string $Due_Date; // the day he must return it
    public function __construct(int $book_id, string $book_author, string $book_name, bool $isAvailable, string $CheckedOut_Date, string $Due_Date)
    {
        $this->book_id = $book_id;
        $this->book_author = $book_author;
        $this->book_name = $book_name;
        $this->isAvailable = $isAvailable;
        $this->CheckedOut_Date = $CheckedOut_Date;
        $this->Due_Date = $Due_Date;
    }

}
class User7{
    private int $user_id;
    private string $user_name;
    private string $CheckedOutBooks;
    public function __construct(int $user_id, string $user_name, string $CheckedOutBooks)
    {$this->user_id = $user_id;$this->user_name = $user_name;$this->CheckedOutBooks = $CheckedOutBooks;}

}

class Library7{
   public array $books=[];
    private string $booksFile = 'books.json';

    public function __construct() {
        if(!file_exists($this->booksFile)) {
            file_put_contents($this->booksFile, json_encode([]));
        }
    }
    public function addBooks(Book $book):void{
        $this->books[] = $book;
        file_put_contents($this->books,$this->booksFile);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        form { margin-bottom: 20px; }
        input { margin: 5px 0; padding: 5px; width: 100%; }
    </style>
</head>
<body>
    <h1>Library Management System</h1>

    <form action="add_book.php" method="post">
        <h2>Add New Book</h2>
        <input type="text" name="title" placeholder="Book Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="text" name="isbn" placeholder="ISBN" required>
        <button type="submit">Add Book</button>
    </form>

    <form action="checkout_book.php" method="post">
        <h2>Checkout Book</h2>
        <input type="text" name="isbn" placeholder="Book ISBN" required>
        <input type="text" name="user" placeholder="User Name" required>
        <button type="submit">Checkout Book</button>
    </form>

    <h2>Available Books</h2>
    <?php include 'TaskWeek7.php'; ?>
</body>
</html>
