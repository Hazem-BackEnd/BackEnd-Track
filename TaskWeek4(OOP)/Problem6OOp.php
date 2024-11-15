<?php
class Ball{
    private float $x;
    private float $y;
    private int $radius;

    private float $X_Delta;
    private float $Y_Delta;


    public function __construct(float $x, float $y, int $radius, float $X_Delta, float $Y_Delta)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        $this->X_Delta = $X_Delta;
        $this->Y_Delta = $Y_Delta;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function getXDelta(): float
    {
        return $this->X_Delta;
    }

    public function setXDelta(float $X_Delta): void
    {
        $this->X_Delta = $X_Delta;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getYDelta(): float
    {
        return $this->Y_Delta;
    }

    public function setYDelta(float $Y_Delta): void
    {
        $this->Y_Delta = $Y_Delta;
    }
    public function move()
    {
        $this->x += $this->X_Delta;
        $this->y += $this->Y_Delta;
    }
    public function reflectHorizontal(){
        $this->x -= $this->X_Delta;
    }
    public function reflectVertical(){
        $this->y -= $this->Y_Delta;
    }
    public function toString(): string
    {
     return "Ball(".$this->x.",".$this->y.")" . ", speed(" .$this->X_Delta .",".$this->Y_Delta.")";
    }
}
$b1=new Ball(2,2,5,1,1);
echo $b1->toString();
