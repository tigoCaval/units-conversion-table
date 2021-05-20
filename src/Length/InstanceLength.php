<?php
namespace Tigo\UnitsConversion\Length;

use Tigo\UnitsConversion\Length\Unit\CmLength;
use Tigo\UnitsConversion\Length\Unit\DmLength;
use Tigo\UnitsConversion\Length\Unit\FtLength;
use Tigo\UnitsConversion\Length\Unit\HmLength;
use Tigo\UnitsConversion\Length\Unit\InLength;
use Tigo\UnitsConversion\Length\Unit\KmLength;
use Tigo\UnitsConversion\Length\Unit\MmLength;
use Tigo\UnitsConversion\Length\Unit\NmLength;
use Tigo\UnitsConversion\Length\Unit\YdLength;
use Tigo\UnitsConversion\Length\Unit\DamLength;
use Tigo\UnitsConversion\Length\Unit\MeterLength;
use Tigo\UnitsConversion\Length\Unit\MicroLength;

/**
 * InstanceLength
 */
class InstanceLength
{
 
    protected static $instance;

    private function __construct() 
    {
        
    }

    
    public static function getKm()
    {
        return self::$instance = new KmLength();  
    }

    public static function getHm()
    {
        return self::$instance = new HmLength();  
    }

    public static function getDam()
    {
        return self::$instance = new DamLength();  
    }

    public static function getMeter()
    {
        return self::$instance = new MeterLength();
    }

    public static function getDm()
    {
        return self::$instance = new DmLength(); 
    }
    
    public static function getCm()
    {
        return self::$instance = new CmLength();
    }

    public static function getMm()
    {
        return self::$instance = new MmLength(); 
    } 

    public static function getYd()
    {
        return self::$instance = new YdLength(); 
    } 

    public static function getFt()
    { 
        return self::$instance = new FtLength(); 
    } 

    public static function getIn()
    {
        return self::$instance = new InLength(); 
    } 

    public static function getNm()
    {
        return self::$instance = new NmLength(); 
    } 

    public static function getMicro()
    {
        return self::$instance = new MicroLength(); 
    } 
    
}