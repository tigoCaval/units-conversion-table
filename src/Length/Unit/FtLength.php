<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Feet
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class FtLength
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
                'A' => 0.003048, 'B' => 1           
            ],
            $this->unit::DAM =>[
                'A' => 0.03048, 'B' => 1           
            ],
            $this->unit::M =>[
                'A' => 0.3048, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 3.048, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 30.48, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 304.8, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 3           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 1           
            ],
            $this->unit::IN =>[
                'A' => 12, 'B' => 1         
            ],
            $this->unit::KM=>[
                'A' => 0.0003048, 'B' => 1           
            ],
            $this->unit::NM=>[
                'A' => 304800000, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 304800, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $ft
     * @return void
     */
    public function convert($unit, $ft)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $ft) / $value['B'];
            }
        }
    }
    
}