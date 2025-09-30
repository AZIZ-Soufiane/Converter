<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculation;

try{
    $a = $argv[1];
    $b = $argv[2];

    if(count($argv) < 3){
        throw new InvalidArgumentException("Please frovide 2 numbers between 0 and 10");
    }
    if($a < 0 || $a > 10 ){
        throw new InvalidArgumentException("The Numbers must be with the range '0 - 10'");
    }
    if($b < 0 || $b > 10 ){
        throw new InvalidArgumentException("The Numbers must be with the range '0 - 10'");
    }

    $a = (int) $a;
    $b = (int) $b;

    $sum = new Calculation((int)$number);

    echo $sum->format("ADDITION",$sum->Addition($b));

}
catch (Throwable $e){
    fwrite(STDERR, "Error: " . $e->getMessage() . PHP_EOL);
}