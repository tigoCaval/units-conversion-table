<?php
namespace Tigo\UnitsConversion;

use Tigo\UnitsConversion\Factories\LengthFactory;
use Tigo\UnitsConversion\Length\GenericLength;

/**
 * ClientLength
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class ClientLength
{    
    /**
     * generic
     *
     * @var LengthFactory
     */
    protected $generic;

    public function __construct()
    {
       $this->generic = new LengthFactory();    
    }
    
    /**
     * convert
     *
     * @param  mixed $unit1
     * @param  mixed $unit2
     * @param  mixed $value
     * @return void
     */
    public function convert($unit1, $unit2, $value)
    {
       return $this->generic->doFactory(new GenericLength(), $unit1, $unit2, $value);
    }

}