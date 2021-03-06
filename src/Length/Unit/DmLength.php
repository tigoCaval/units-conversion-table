<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Decimeter
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class DmLength
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
                'A' => 1, 'B' => 1000           
            ],
            $this->unit::DAM =>[
                'A' => 1, 'B' => 100           
            ],
            $this->unit::M =>[
                'A' => 1, 'B' => 10           
            ],
            $this->unit::DM => [
                'A' => 1, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 10, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 100, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 9.144           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 3.048           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 0.254         
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 10000           
            ],
            $this->unit::NM=>[
                'A' => 100000000, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 100000, 'B' => 1     
            ]
        ]; 
    }
        
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $dm
     * @return void
     */
    public function convert($unit, $dm)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $dm) / $value['B'];
            }
        } 
    }
  
}