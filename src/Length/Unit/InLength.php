<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Inches
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class InLength
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
                'A' => 0.000254, 'B' => 1           
            ],
            $this->unit::DAM =>[
                'A' => 0.00254, 'B' => 1           
            ],
            $this->unit::M =>[
                'A' => 0.0254, 'B' => 1           
            ],
            $this->unit::DM => [
                'A' => 0.254, 'B' => 1           
            ],
            $this->unit::CM =>[
                'A' => 2.54, 'B' => 1           
            ],
            $this->unit::MM => [
                'A' => 25.4, 'B' => 1           
            ],
            $this->unit::YD => [
                'A' => 1, 'B' => 36           
            ],
            $this->unit::FT =>[
                'A' => 1, 'B' => 12           
            ],
            $this->unit::IN =>[
                'A' => 1, 'B' => 1         
            ],
            $this->unit::KM=>[
                'A' => 0.0000254, 'B' => 1           
            ],
            $this->unit::NM=>[
                'A' => 25400000, 'B' => 1           
            ],
            $this->unit::MICRO=>[
                'A' => 25400, 'B' => 1     
            ]
        ]; 
    }
    
    /**
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $in
     * @return void
     */
    public function convert($unit, $in)
    {
        foreach($this->matrix() as $key => $value){
            if($unit == $key)
            {       
               return ($value['A'] * $in) / $value['B'];
            }
        }
    }
    
}