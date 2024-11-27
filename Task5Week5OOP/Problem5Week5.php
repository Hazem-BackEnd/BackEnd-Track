<?php

abstract class Person{
    private string $name;
    private string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }
    public abstract function toString(): string;
}

class Student extends Person{
    private string $program;
    private int $year;
    private float $fee;
    public function __construct(string $name,string $address,string $program, int $year, float $fee){
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(): string
    {
        return $this->program;
    }

    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getFee(): float
    {
        return $this->fee;
    }

    public function setFee(float $fee): void
    {
        $this->fee = $fee;
    }
    public function toString() : string {
        $name=parent::getName();
        $address=parent::getAddress();
        return "Student[Person[name={$name},address={$address}],program={$this->program},year={$this->year},fee={$this->fee}]";
    }
}
$s=new Student("Mohamed Zayd" , "102 - st dokki","Back-end",3,5500);
echo $s->toString();

class Staff extends Person{
    private string $school;
    private float $pay;
    public function __construct($name,$address,string $school, float $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getPay(): float
    {
        return $this->pay;
    }

    public function setPay(float $pay): void
    {
        $this->pay = $pay;
    }
    public function toString(): string
    {
        $name=parent::getName();
        $address=parent::getAddress();
        return "Staff[Person[name={$name},address={$address}],school={$this->school},pay={$this->pay}]";
    }
}
$staff=new Staff("Mohamed zayd","st-123","faculty of science",7200);
echo "<br>". $staff->toString();