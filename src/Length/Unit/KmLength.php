<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule kilometers
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class KmLength
{
    const HM = 10;  //Hectometers
    const KM = 1; //kilometers
    const DAM = 100; //Dekameters 
    const M = 1000; //Meters
    const DM = 10000; //Decimeters
    const CM = 100000; //Centimeters
    const MM = 1000000; //Millimeters
    const YD = 0.0009144; //Yards 
    const FT = 0.0003048; //Feet
    const IN = 0.0000254; //Inches 
    
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
     * @param  mixed $km
     * @return void
     */
    public function convert($unit, $km)
    {
        $result = 0;
        switch($unit){
            case $this->unit::KM:
                 $result = ($km * self::KM);
                 break;
            case $this->unit::HM:
                $result = ($km * self::HM);
                break;
            case $this->unit::DAM:
                $result = ($km * self::DAM);
                break;
            case $this->unit::M: 
                $result = ($km * self::M);
                break;
            case $this->unit::DM:
                $result = ($km * self::DM);
                break; 
            case $this->unit::CM:
                $result = ($km * self::CM);
                break;
            case $this->unit::MM:
                $result = ($km * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($km / self::YD);
                break;
            case $this->unit::FT:
                $result = ($km / self::FT);
                break;
            case $this->unit::IN:
                $result = ($km / self::IN);
                break;                        
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }

}