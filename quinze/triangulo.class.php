<?php

class Triangulo {

    private const equilatero = "equilatero";   
    private const isosceles = "Isósceles"; 
    private const escaleno = "escaleno";

    private $sideA;
    private $sideB;
    private $sideC;
    
    
    public function __construct($sideA, $sideB, $sideC) {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;

    }

    function verificaTriangulo () {

        return ($this->sideA + $this->sideB > $this->sideC)
        && ($this->sideA + $this->sideC > $this->sideB)
        && ($this->sideC + $this->sideB > $this->sideA);
    }

    function verificaTipo () {
        if (
            ($this->sideA && $this->sideB == $this->sideC)
            && ($this->sideA && $this->sideC == $this->sideB)
            && ($this->sideC && $this->sideB == $this->sideA)
        ) {

            return self::equilatero;
    
        } else if (
            ($this->sideA == $this->sideB)
            || ($this->sideA == $this->sideC)
            || ($this->sideC == $this->sideB)
        ) {
    
            return self::isosceles;
    
        } else {
    
            return self::escaleno;
    
        }
    }
    
}