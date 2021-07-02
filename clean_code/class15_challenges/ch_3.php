<?php

// class Manzano
// {
//     private $manzanas = [];

//     public function getManzanas()
//     {
//         return $this->manzanas;
//     }
// }

// class ContadorDeManzanas
// {
//     private $manzano;

//     public function __construct(Manzano $manzano)
//     {
//         $this->manzano = $manzano;
//     }

//     public function cuantas()
//     {
//         return count($this->manzano->getManzanas());
//     }
// }

interface Arbol
{
    public function get(): array;
}

class Manzano implements Arbol
{
    private $manzanas = [];

    public function get(): array
    {
        return $this->manzanas;
    }
}

class ContadorDeManzanas
{
    private $arbol;

    public function __construct(Arbol $arbol)
    {
        $this->arbol = $arbol;
    }

    public function cuantas()
    {
        return count($this->arbol->get());
    }
}
