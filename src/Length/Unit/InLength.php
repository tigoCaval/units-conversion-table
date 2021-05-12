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
    const IN = 1; //Inches 
    const HM = 0.000254; //Hectometers
    const KM = 0.0000254; //kilometers
    const DAM = 0.00254; //Dekameters
    const M = 0.0254; //Meters
    const DM = 0.254; //Decimeter
    const CM = 2.54; //Centimeter
    const MM = 25.4; //Millimeter 
    const YD = 36; //Yards
    const FT = 12; //Feet
    
    
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
     * @param  mixed $in
     * @return void
     */
    public function convert($unit, $in)
    {
        $result = 0;
        switch($unit){
            case $this->unit::IN:
                $result = ($in * self::IN);
                break;
            case $this->unit::HM:
                $result = ($in * self::HM);
                break;
            case $this->unit::KM:
                $result = ($in * self::KM);
                break;
            case $this->unit::DAM: 
                $result = ($in * self::DAM);
                break;
            case $this->unit::M:
                $result = ($in * self::M);
                break; 
            case $this->unit::DM:
                $result = ($in * self::DM);
                break;
            case $this->unit::CM:
                $result = ($in * self::CM);
                break;  
            case $this->unit::MM:
                $result = ($in * self::MM);
                break;
            case $this->unit::YD: 
                $result = ($in / self::YD);
                break;
            case $this->unit::FT:
                $result = ($in / self::FT);
                break;                   
            default:
                $result = '#Erro 501';
                break;
        }
        return $result;
    }
    
}