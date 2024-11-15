<?php
Class Circle{
    private float $radius=1.0;
    private string $color="red";

    public function __construct($radius, $color){
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius){
        $this->radius = $radius;
    }

    public function getColor(): string{
        return $this->color;
    }

    public function setColor(string $color){
        $this->color = $color;
    }
    public function getArea(){
        return $this->radius*$this->radius*pi();
    }
    public function toString() : string
    {
        return "Circle[ radius=".$this->radius.", color =".$this->color.", Area =".$this->getArea()." ]";
    }
}
$c1=new Circle(12,12);
 echo $c1->toString();