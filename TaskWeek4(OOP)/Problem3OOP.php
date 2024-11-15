<?php
class Rectangle{
    private float $length;
    private float $width;
    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }
    public function setLength(float $length)
    {
        $this->length = $length;
    }
    public function getWidth(): float
    {
        return $this->width;
    }
    public function setWidth(float $width)
    {
        $this->width = $width;
    }
    public function getArea() : float
    {
        return $this->length * $this->width;
    }
    public function getPerimeter():float
    {
    return 2*($this->length + $this->width);
    }
    public function toString():string
    {
    return "Rectangle["."length= ".$this->length.",width= ".$this->width."]";
    }
}
$r1=new Rectangle(3,4);
echo $r1->toString();