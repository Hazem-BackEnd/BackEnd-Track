<?php
Class Employee{
    private int $id;
    private string $firstname;
    private string $lastname;
    private int $salary;
    public function __construct(int $id, string $firstname, string $lastname, int $salary)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->salary = $salary;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function getName() : string
    {
        return $this->firstname." ".$this->lastname;
    }
    public function getSalary(): int
    {
        return $this->salary;
    }
    public function setSalary(int $salary){
        $this->salary = $salary;
    }
    public function getAnnualSalary():int
    {
        return $this->salary*12;
    }
    public function raiseSalary(int $percent){
    $this->salary += ($percent/100)*$this->salary;
    }

    public function toString():string
    {
        return "Employee[ "."id=".$this->id.", Name : ".$this->getName().", salary= ".$this->salary." ]";
    }
}
$e1=new Employee(1, "John", "Doe", "1000");
$e1->raiseSalary(25);
echo $e1->toString();