<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Centimeters
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class CmLength
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
                'A' => 1, 'B' => 10000           
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 1000           
            ],
            $this->unit::M =>[
                'A' => 1, 'B' => 100           
            ],
            $this->unit::DM => [
                'A' => 1, 'B' => 10           
            ],
            $this->unit::CM =>[
                'A' => 1, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 10, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 91.44           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 30.48           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 2.54           
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 100000           
            ],
            $this->unit::NM=>[
                'A' => 10000000, 'B' => 1     
            ],
            $this->unit::MICRO=>[
                'A' => 10000, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * Convert
     * 
     * @param  mixed $unit
     * @param  mixed $cm
     * @return void
     */
    public function convert($unit, $cm)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $cm) / $value['B'];
            }
        }  
    }
    

}