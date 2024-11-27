<?php
abstract class Shape{
private string $color="red";
private bool $filled = true;
    public function __construct(string $color, bool $filled)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function isFilled(): bool
    {
        return $this->filled;
    }

    public function setFilled(bool $filled): void
    {
        $this->filled = $filled;
    }
    public abstract function toString();
}
class Circle extends Shape{
    private float $radius=1.0;
    public function __construct(string $color,bool $filled,float $radius)
    {
        parent::__construct($color,$filled);
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
    public function getArea() : float{
    return $this->radius * $this->radius*pi();
    }
    public function getPerimeter() : float{
        return 2 *pi()*$this->radius;
    }
    public function toString() :string
    {
        $c=parent::getColor();
        $f=parent::isFilled();
        return "Circle[Shape[color=$c ,filled=$f],radius=$this->radius]";
    }
}
class Rectangle extends Shape{
    private float $width=1;
    private float $length=1;
    public function __construct(float $width,float $length,string $color,bool $filled){
        parent::__construct($color,$filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }
    public function getArea() : float{
        return $this->width * $this->length;
    }
    public function getPerimeter(): float{
        return 2 *($this->width + $this->length);
    }
    public function toString() :string
    {
        $c=parent::getColor();
        $f=parent::isFilled();
        return "Rectangle[Shape[color=$c ,filled=$f],width=$this->width,length=$this->length]";
    }
}
class Square extends Rectangle
{
    public function __construct(float $side, string $color, bool $filled)
    {
        parent::__construct($side, $side, $color, $filled);
    }
    public function getSide(): float
    {
        return parent::getLength();
    }
    public function setSide(float $side): void{
        parent::setLength($side);
        parent::setWidth($side);
    }
    public function setWidth(float $side) :void
    {
        parent::setWidth($side);
    }
    // redundant
    public function setLength(float $side) : void{
        parent::setLength($side);
    }
    public function toString(): string
    {
        $c=parent::getColor();
        $f=parent::isFilled();
        $s=parent::getLength();
        return "Square[Shape[color=$c ,filled=$f],side=$s]";
    }
}
$sq=new Square(34,"green",true);
echo $sq->toString();