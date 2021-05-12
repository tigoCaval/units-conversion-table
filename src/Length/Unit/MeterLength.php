<?php
namespace Tigo\UnitsConversion\Length\Unit;

use Tigo\UnitsConversion\Length\StandardUnit;


/**
 * Business rule Meters
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class MeterLength
{
    const M = 1; //Meters
    const HM = 100; //Hectometers
    const KM = 1000; //kilometers
    const DAM = 10; //Dekameters 
    const DM = 10; //Decimeter
    const CM = 100; //Centimeter
    const MM = 1000; //Millimeter
    const YD = 0.9144; //Yards 
    const FT = 0.3048; //Feet
    const IN = 0.0254; //Inches
    
    
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
     * @param  mixed $m
     * @return void
     */
    public function convert($unit, $m)
    {
        $result = 0;
        switch($unit){
            case $this->unit::M:
                $result = ($m * self::M);
                break;
            case $this->unit::HM:
                $result = ($m / self::HM);
                break;
            case $this->unit::KM:
                $result = ($m / self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($m / self::DAM);
                break;
            case $this->unit::DM:
                $result = ($m * self::DM);
                break; 
            case $this->unit::CM:
                $result = ($m * self::CM);
                break;
            case $this->unit::MM:
                $result = ($m * self::MM);
                break;  
            case $this->unit::YD:
                $result = ($m / self::YD);
                break;
            case $this->unit::FT:
                $result = ($m / self::FT);
                break;
            case $this->unit::IN:
                $result = ($m / self::IN);
                break;        
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
    
}