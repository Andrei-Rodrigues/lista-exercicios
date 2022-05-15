<?php

class Venda {
     
    private const litrosPorM2 = 3;
    private const litrosPorGalao = 18;   
    private const valorGalao = 60;

    public $metragem;
    
    
    public function __construct($metragem) {
        $this->metragem = $metragem;

    }

    public function calculaGaloes () {
        return ceil($this->calculaLitros() / self::litrosPorGalao);
    }

    private function calculaLitros () {
        return $this->metragem / self::litrosPorM2;
    }

    public function calculaCusto () {
        return $this->calculaGaloes() * self::valorGalao;
    }
}