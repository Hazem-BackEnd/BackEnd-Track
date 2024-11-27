<?php
Trait Circle1{
    private float $radius=1.0;
    private string $color="red";
    public function __construct(float $radius,string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getArea(): float{
        return $this->radius * $this->radius * pi();
    }
    public function toString() : string{
        return "Circle[radius = $this->radius , color = $this->color]";
    }
}
class Cylinder{
    use Circle1;
    private float $height=1.0;

    public function __construct(float $radius,string $color,float $height)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->height = $height;
    }
    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height): void {
        $this->height = $height;
    }

    public function getVolume(): float {
        return $this->getArea() * $this->height;
    }

    public function __toString(): string {
        return "Cylinder[radius={$this->radius},color={$this->color},height={$this->height}]";
    }
}
