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
    const CM = 1; //Centimeters
    const HM = 10000; //Hectometers
    const KM = 100000; //kilometers
    const DAM = 1000; //Dekameters
    const M = 100; //Meters
    const DM = 10; //Decimeter
    const MM = 10; //Millimeter
    const YD = 91.44; //Yards 
    const FT = 30.48; //Feet
    const IN = 2.54; //Inches

    
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
     * Convert
     * 
     * @param  mixed $unit
     * @param  mixed $cm
     * @return void
     */
    public function convert($unit, $cm)
    {
        $result = 0;
        switch($unit){
            case $this->unit::CM:
                $result = ($cm * self::CM);
                break;
            case $this->unit::HM:
                $result = ($cm / self::HM);
                break;
            case $this->unit::KM:
                $result = ($cm / self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($cm / self::DAM);
                break;
            case $this->unit::M:
                $result = ($cm / self::M);
                break; 
            case $this->unit::DM:
                $result = ($cm / self::DM);
                break;
            case $this->unit::MM:
                $result = ($cm * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($cm / self::YD);
                break;
            case $this->unit::FT:
                $result = ($cm / self::FT);
                break;
            case $this->unit::IN:
                $result = ($cm / self::IN);
                break;                                             
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
    

}