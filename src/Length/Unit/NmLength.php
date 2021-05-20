<?php

namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Nanometers
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class NmLength
{

    /**
     * Instance
     *
     * @var StandardUnit
     */
    protected $unit;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->unit = new StandardUnit();
    }

     /**
     * matrix
     *
     * @return array
     */
    protected function matrix()
    {
        return [
            $this->unit::HM =>[
                'A' => 1, 'B' => 100000000000          
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 10000000000           
            ],
            $this->unit::M =>[
                'A' => 1, 'B' => 1000000000           
            ],
            $this->unit::DM => [
                'A' => 1, 'B' => 100000000           
            ],
            $this->unit::CM =>[
                'A' => 1, 'B' => 10000000            
            ],
            $this->unit::MM => [
                'A' => 1, 'B' => 1000000           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 914400000           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 304800000           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 25400000         
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 1000000000000           
            ],
            $this->unit::NM=>[
                'A' => 1, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 1, 'B' => 1000     
            ]
 
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $nm
     * @return void
     */
    public function convert($unit, $nm)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $nm) / $value['B'];
            }
        }
    }

}   