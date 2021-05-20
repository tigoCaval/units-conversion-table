<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Hectometers
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class HmLength
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
                'A' => 1, 'B' => 1           
            ],
            $this->unit::DAM =>[
                'A' => 10, 'B' => 1           
            ],
            $this->unit::M =>[
                'A' => 100, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 1000, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 10000, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 100000, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 0.009144           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 0.003048           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 0.000254         
            ],
            $this->unit::KM=>[
                'A' => 1, 'B' => 10        
            ],
            $this->unit::NM=>[
                'A' => 100000000000, 'B' => 1     
            ],
            $this->unit::MICRO=>[
                'A' => 100000000, 'B' => 1     
            ]
        ]; 
    }
          
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $hm
     * @return void
     */
    public function convert($unit, $hm)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $hm) / $value['B'];
            }
        }
    }

}