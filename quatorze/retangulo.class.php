<?php

class Retangulo {

    private const quadrado = "quadrado";
    private const retangulo = "retangulo";

    public $base;
    public $altura;
    
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;

    }

    function verificaRetangulo () {
        if ($this->base == $this->altura) {
            return self::quadrado;
        }
        return self::retangulo;
    }

    function calculaArea () {
        return $this->base * $this->altura;
    }

    function calculaPerimetro () {
        return $this->base * 2 + $this->altura *2;
    }
    
}