<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Millimeter
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class MmLength
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
                'A' => 1, 'B' => 100000          
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 10000           
            ],
            $this->unit::M =>[
                'A' => 1, 'B' => 1000           
            ],
            $this->unit::DM => [
                'A' => 1, 'B' => 100           
            ],
            $this->unit::CM =>[
                'A' => 1, 'B' => 10           
            ],
            $this->unit::MM => [
                'A' => 1, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 914.4           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 304.8           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 25.4         
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 1000000           
            ],
            $this->unit::NM=>[
                'A' => 1000000, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 1000, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $mm
     * @return void
     */
    public function convert($unit, $mm)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $mm) / $value['B'];
            }
        } 
    }

}