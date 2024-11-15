<?php
Class Person{
    private $name;
    private $id;

    public function __construct(){
        $this->name = "None";
        $this->id = "0000";
    }

    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getId(): string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }
    public function Person_Information(){
        echo "Name: ".$this->name."<br>"."ID: ".$this->id."<br>";
    }
}

Class Employee extends Person{
    private $company_name;
    private $salary;
    public function __construct(){
        parent::__construct();
        $this->company_name = "None";
        $this->salary = 0;
    }

    public function getCompanyName(): string{
        return $this->company_name;
    }

    public function setCompanyName(string $company_name){
        $this->company_name = $company_name;
    }

    public function getSalary(): int{
        return $this->salary;
    }

    public function setSalary(int $salary){
        $this->salary = $salary;
    }
    public function Employee_Information(){
        $this->Person_Information();
        echo "Company Name: ".$this->company_name."<br>"."Salary: ".$this->salary."<br>";
    }
}

$e1=new Employee();
$e1->setName("Mohamed Zayd");
$e1->setId("7777");
$e1->setCompanyName("Homzmart");
$e1->setSalary(15500);
$e1->Employee_Information();
