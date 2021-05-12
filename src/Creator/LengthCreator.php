<?php
namespace Tigo\UnitsConversion\Creator;

use Tigo\UnitsConversion\Interfaces\LengthInterface;

abstract class LengthCreator
{
    
    protected abstract function factoryMethod(LengthInterface $length, $unit1, $unit2, $value);

    public function doFactory($method, $unit1, $unit2, $value)
    {
       return $this->factoryMethod($method, $unit1, $unit2, $value); 
    } 
    
}