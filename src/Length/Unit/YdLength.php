<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Yard
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class YdLength
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
                'A' => 0.009144, 'B' => 1          
            ],
            $this->unit::DAM =>[
                'A' => 0.09144, 'B' => 1           
            ],
            $this->unit::M =>[
                'A' => 0.9144, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 9.144, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 91.44, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 914.4, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 1           
            ],
            $this->unit::FT =>[
                'A' => 3, 'B' => 1           
            ],
            $this->unit::IN =>[
                'A' => 36, 'B' => 1         
            ],
            $this->unit::KM=>[
                'A' => 0.0009144, 'B' => 1           
            ],
            $this->unit::NM=>[
                'A' => 914400000 , 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 914400, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $yd
     * @return void
     */
    public function convert($unit, $yd)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $yd) / $value['B'];
            }
        }
    }
   

}