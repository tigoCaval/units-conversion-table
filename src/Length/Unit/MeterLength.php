<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Meters
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class MeterLength
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
                'A' => 1, 'B' => 100           
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 10           
            ],
            $this->unit::M =>[
                'A' => 1, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 10, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 100, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 1000, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 0.9144           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 0.3048           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 0.0254         
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 1000           
            ],
            $this->unit::NM=>[
                'A' => 1000000000, 'B' => 1          
            ],
            $this->unit::MICRO=>[
                'A' => 1000000, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $m
     * @return void
     */
    public function convert($unit, $m)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $m) / $value['B'];
            }
        }  
    }
    
}