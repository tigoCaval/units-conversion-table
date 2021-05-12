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
    const YD = 1; //Yards 
    const HM = 0.009144; //Hectometers
    const KM = 0.0009144; //kilometers
    const DAM = 0.09144; //Dekameters
    const M = 0.9144; //Meters
    const DM = 9.144; //Decimeter
    const CM = 91.44; //Centimeter
    const MM = 914.4; //Millimeter 
    const FT = 3; //Feet
    const IN = 36; //Inches 

    
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
     * @param  mixed $yd
     * @return void
     */
    public function convert($unit, $yd)
    {
        $result = 0;
        switch($unit){
            case $this->unit::YD:
                $result = ($yd * self::YD);
                break;
            case $this->unit::HM:
                $result = ($yd * self::HM);
                break;
            case $this->unit::KM:
                $result = ($yd * self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($yd * self::DAM);
                break;
            case $this->unit::M:
                $result = ($yd * self::M);
                break; 
            case $this->unit::DM:
                $result = ($yd * self::DM);
                break;
            case $this->unit::CM:
                $result = ($yd * self::CM);
                break;  
            case $this->unit::MM:
                $result = ($yd * self::MM);
                break;
            case $this->unit::FT: 
                $result = ($yd * self::FT);
                break;
            case $this->unit::IN:
                $result = ($yd * self::IN);
                break;              
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
   

}