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
    const DAM = 1; //Dekameters
    const HM = 10; //Hectometers
    const KM = 100; //kilometers
    const M = 10; //Meters
    const DM = 100; //Decimeter
    const CM = 1000; //Centimeter
    const MM = 10000; //Millimeter
    const YD = 0.09144; //Yards 
    const FT = 0.03048; //Feet
    const IN = 0.00254; //Inches
    
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
     * convert
     *
     * @param  mixed $unit
     * @param  mixed $dam
     * @return void
     */
    public function convert($unit, $dam)
    {
        $result = 0;
        switch($unit){
            case $this->unit::DAM:
                $result = ($dam * self::DAM);
                break;
            case $this->unit::HM:
                $result = ($dam / self::HM);
                break;
            case $this->unit::KM:
                $result = ($dam / self::KM);
                break;
            case $this->unit::M: 
                $result = ($dam * self::M);
                break;
            case $this->unit::DM:
                $result = ($dam * self::DM);
                break; 
            case $this->unit::CM:
                $result = ($dam * self::CM);
                break;
            case $this->unit::MM:
                $result = ($dam * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($dam / self::YD);
                break;
            case $this->unit::FT:
                $result = ($dam / self::FT);
                break;
            case $this->unit::IN:
                $result = ($dam / self::IN);
                break;                          
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }

}