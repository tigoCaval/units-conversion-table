<?php
namespace Tigo\UnitsConversion\Length;

use Tigo\UnitsConversion\Length\Unit\CmLength;
use Tigo\UnitsConversion\Length\Unit\DmLength;
use Tigo\UnitsConversion\Length\Unit\FtLength;
use Tigo\UnitsConversion\Length\Unit\HmLength;
use Tigo\UnitsConversion\Length\Unit\InLength;
use Tigo\UnitsConversion\Length\Unit\KmLength;
use Tigo\UnitsConversion\Length\Unit\MmLength;
use Tigo\UnitsConversion\Length\Unit\YdLength;
use Tigo\UnitsConversion\Length\Unit\DamLength;
use Tigo\UnitsConversion\Length\Unit\MeterLength;

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
      if(!isset(self::$instance))  
         self::$instance = new KmLength();
      return self::$instance;  
    }

    public static function getHm()
    {
        if(!isset(self::$instance))  
          self::$instance = new HmLength();
        return self::$instance;  
    }

    public static function getDam()
    {
        if(!isset(self::$instance))  
           self::$instance = new DamLength();
        return self::$instance;   
    }

    public static function getMeter()
    {
        if(!isset(self::$instance))  
          self::$instance = new MeterLength();
        return self::$instance; 
    }

    public static function getDm()
    {
        if(!isset(self::$instance))  
          self::$instance = new DmLength();
        return self::$instance; 
    }
    
    public static function getCm()
    {
        if(!isset(self::$instance))  
          self::$instance = new CmLength();
        return self::$instance; 
    }

    public static function getMm()
    {
        if(!isset(self::$instance))  
          self::$instance = new MmLength();
        return self::$instance; 
    } 

    public static function getYd()
    {
        if(!isset(self::$instance))  
          self::$instance = new YdLength();
        return self::$instance; 
    } 

    public static function getFt()
    {
        if(!isset(self::$instance))  
          self::$instance = new FtLength();
        return self::$instance; 
    } 

    public static function getIn()
    {
        if(!isset(self::$instance))  
          self::$instance = new InLength();
        return self::$instance; 
    } 

    

}