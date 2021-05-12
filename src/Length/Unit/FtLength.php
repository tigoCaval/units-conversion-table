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
    const FT = 1; //Feet    
    const HM = 0.003048; //Hectometers
    const KM = 0.0003048; //kilometers
    const DAM = 0.03048; //Dekameters
    const M = 0.3048; //Meters
    const DM = 3.048; //Decimeter
    const CM = 30.48; //Centimeter
    const MM = 304.8; //Millimeter 
    const YD = 3; //Yards
    const IN = 12; //Inches 
    
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
     * @param  mixed $ft
     * @return void
     */
    public function convert($unit, $ft)
    {
        $result = 0;
        switch($unit){
            case $this->unit::FT:
                $result = ($ft * self::FT);
                break;
            case $this->unit::HM:
                $result = ($ft * self::HM);
                break;
            case $this->unit::KM:
                $result = ($ft * self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($ft * self::DAM);
                break;
            case $this->unit::M:
                $result = ($ft * self::M);
                break; 
            case $this->unit::DM:
                $result = ($ft * self::DM);
                break;
            case $this->unit::CM:
                $result = ($ft * self::CM);
                break;  
            case $this->unit::MM:
                $result = ($ft * self::MM);
                break;
            case $this->unit::YD: 
                $result = ($ft / self::YD);
                break;
            case $this->unit::IN:
                $result = ($ft * self::IN);
                break;                   
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
    
}