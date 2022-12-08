<?php
abstract class Sekil
{
    abstract protected function Alan();
    abstract protected function Cevre();
}
class Ucgen extends Sekil
{
    public float $kenar1;
    public float $kenar2;
    public float $kenar3;
    function __construct(float $kenar1,float $kenar2,float $kenar3) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }
    public function Alan()
    {
        $s = $this->Cevre()/2;
        return pow($s*($s-$this->kenar1)*($s-$this->kenar2)*($s-$this->kenar3),0.5);
    }

    public function Cevre()
    {
        return $this->kenar2 + $this->kenar1 + $this-> kenar3;
    }
}
class Dikdortgen extends Sekil

{
    public float $kenar1;
    public float $kenar2;
    function __construct(float $kenar1,float $kenar2) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;

    }
    public function Alan()
    {
        return $this->kenar1*$this->kenar2;
    }

    public function Cevre()
    {
        return ($this->kenar1 + $this->kenar2)*2;
    }
}
class Kare extends Dikdortgen
{
    function __construct(float $kenar1) {
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar1;
    }
}
?>