<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;

/**
 * Business rule Dekameters
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 * 
 */
class DamLength
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
                'A' => 1, 'B' => 10           
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 1           
            ],
            $this->unit::M =>[
                'A' => 10, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 100, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 1000, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 10000, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 0.09144           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 0.03048           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 0.00254          
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 100           
            ],
            $this->unit::NM=>[
                'A' => 10000000000, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 10000000, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $dam
     * @return void
     */
    public function convert($unit, $dam)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $dam) / $value['B'];
            }
        } 
    }

}