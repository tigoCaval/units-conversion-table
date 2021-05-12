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
    const MM = 1; //Millimeter
    const HM = 100000; //Hectometers
    const KM = 1000000; //kilometers
    const DAM = 10000; //Dekameters
    const M = 1000; //Meters
    const DM = 100; //Decimeter
    const CM = 10; //Centimeter
    const YD = 914.4; //Yards 
    const FT = 304.8; //Feet
    const IN = 25.4; //Inches 
     
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
     * @param  mixed $mm
     * @return void
     */
    public function convert($unit, $mm)
    {
        $result = 0;
        switch($unit){
            case $this->unit::MM:
                $result = ($mm * self::MM);
                break;
            case $this->unit::HM:
                $result = ($mm / self::HM);
                break;
            case $this->unit::KM:
                $result = ($mm / self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($mm / self::DAM);
                break;
            case $this->unit::M:
                $result = ($mm / self::M);
                break; 
            case $this->unit::DM:
                $result = ($mm / self::DM);
                break;
            case $this->unit::CM:
                $result = ($mm / self::CM);
                break;  
            case $this->unit::YD:
                $result = ($mm / self::YD);
                break;
            case $this->unit::FT:
                $result = ($mm / self::FT);
                break;
            case $this->unit::IN:
                $result = ($mm / self::IN);
                break;            
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }

}