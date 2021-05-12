<?php
namespace Tigo\UnitsConversion\Factories;

use Tigo\UnitsConversion\Creator\LengthCreator;
use Tigo\UnitsConversion\Interfaces\LengthInterface;

class LengthFactory extends LengthCreator
{
      
    protected function factoryMethod(LengthInterface $length, $unit1, $unit2, $value)
    {
        return $length->convert($unit1, $unit2, $value);
    }

}