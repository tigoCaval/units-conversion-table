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
    const DM = 1; //Decimeter
    const HM = 1000; //Hectometers
    const KM = 10000; //kilometers
    const DAM = 100; //Dekameters
    const M = 10; //Meters
    const CM = 10; //Centimeter
    const MM = 100; //Millimeter
    const YD = 9.144; //Yards 
    const FT = 3.048; //Feet
    const IN = 0.254; //Inches
   
    /**
     * Instance
     *
     * @var StandardUnit
     */
    protected $unit;

    public function __construct()
    {
        $this->unit = new StandardUnit();
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
        $result = 0;
        switch($unit){
            case $this->unit::DM:
                $result = ($dm * self::DM);
                break;
            case $this->unit::HM:
                $result = ($dm / self::HM);
                break;
            case $this->unit::KM:
                $result = ($dm / self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($dm / self::DAM);
                break;
            case $this->unit::M:
                $result = ($dm / self::M);
                break; 
            case $this->unit::CM:
                $result = ($dm * self::CM);
                break;
            case $this->unit::MM:
                $result = ($dm * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($dm / self::YD);
                break;
            case $this->unit::FT:
                $result = ($dm / self::FT);
                break;
            case $this->unit::IN:
                $result = ($dm / self::IN);
                break;                      
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
  
}