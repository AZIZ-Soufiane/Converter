<?php

namespace App;

class Calculation implements CalcInterface{

    use FormatterTrait;

    private int $number;

    public function __construct($number){
        $this->number = $number;
    }
    public function Addition($other): int{
        return $this->number + $other;
    }
}