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
    const HM = 1; //Hectometers
    const KM = 10; //kilometers
    const DAM = 10; //Dekameters
    const M = 100; //Meters
    const DM = 1000; //Decimeter
    const CM = 10000; //Centimeter
    const MM = 100000; //Millimeter
    const YD = 0.009144; //Yards
    const FT = 0.003048; //Feet
    const IN = 0.000254; //Inches
   
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
     * @param  mixed $hm
     * @return void
     */
    public function convert($unit, $hm)
    {
        $result = 0;
        switch($unit){
            case $this->unit::HM:
                $result = ($hm * self::HM);
                break;
            case $this->unit::KM:
                $result = ($hm / self::KM);
                break;
            case $this->unit::DAM:
                $result = ($hm * self::DAM);
                break;
            case $this->unit::M: 
                $result = ($hm * self::M);
                break;
            case $this->unit::DM:
                $result = ($hm * self::DM);
                break; 
            case $this->unit::CM:
                $result = ($hm * self::CM);
                break;
            case $this->unit::MM:
                $result = ($hm * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($hm / self::YD);  
                break;
            case $this->unit::FT:
                $result = ($hm / self::FT);
                break;
            case $this->unit::IN:
                $result = ($hm / self::IN);
                break;                 
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }

}