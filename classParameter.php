<?php


class classParameter
{

    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }


    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
    }

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return (-$this->b + (pow($this->b * $this->b, 0.5) - (4 * $this->a * $this->c))) /(2 * $this->a);
    }

    public function getRoot2()
    {
        return (-$this->b - (pow($this->b * $this->b, 0.5) - (4 * $this->a * $this->c))) / (2 * $this->a);
    }


}