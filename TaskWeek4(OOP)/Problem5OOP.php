<?php
class Account{
    private string $id;
    private string $name;
    private int $balance;

    public function __construct(string $id, string $name, int $balance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
    public function credit(int $amount) : int
    {
        $this->balance += $amount;
        return $this->balance;
    }
    public function debit(int $amount) : int
    {
        if ($this->balance >= $amount) $this->balance -= $amount;
        else echo "Amount exceeded balance";
        return $this->balance;
    }

    public function transferTo(Account $account,int $amount) : int{
        if($this->balance >= $amount){
            $account->balance=$account->balance+$amount;
            $this->balance-=$amount;
        }
        else echo "Amount exceeded balance";
        return $this->balance;
    }
    public function toString() : string
    {
    return "Account[id= ".$this->id.", name=".$this->name.", balance=".$this->balance."]";
    }
}

$a1=new Account("2323","Mohamed Zayd",13000);
echo $a1->toString()."<br>";
$a2=new Account("2121","Hazem Mostafa",5000);
echo $a2->toString()."<br>";
$a1->transferTo($a2,4000);
echo "Mohamed after transfer money to hazem<br>".$a1->toString();
echo "<br>".$a2->toString();