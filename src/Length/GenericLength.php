<?php
namespace Tigo\UnitsConversion\Length;

use Tigo\UnitsConversion\Interfaces\LengthInterface;
use Tigo\UnitsConversion\Length\StandardUnit;
use Tigo\UnitsConversion\Length\InstanceLength;
 

/**
 * GenericLength
 * 
 * @author Tiago A C Pereira <tiagocavalcante57@gmail.com>
 */
class GenericLength implements LengthInterface 
{
          
      /**
       * unit
       *
       * @var mixed
       */
      protected $unit;
           
      /**
       * __construct
       *
       * @$result void
       */
      public function __construct()
      {
          $this->unit = new StandardUnit();
      }
          
      /**
       * convert
       *
       * @param  mixed $unit1
       * @param  mixed $unit2
       * @param  mixed $value
       * @return void
       */
      public function convert($unit1, $unit2, $value)
      {
             $result = 0;
             switch($unit1){
               case $this->unit::KM: 
                    $result = InstanceLength::getKm()->convert($unit2, $value);    
                    break;
                case $this->unit::HM: 
                     $result = InstanceLength::getHm()->convert($unit2, $value);    
                     break;
                case $this->unit::DAM:
                     $result = InstanceLength::getDam()->convert($unit2, $value);    
                     break;
                case $this->unit::M:
                     $result = InstanceLength::getMeter()->convert($unit2, $value);    
                     break; 
               case $this->unit::DM:
                    $result = InstanceLength::getDm()->convert($unit2, $value);    
                    break;
               case $this->unit::CM:
                    $result = InstanceLength::getCm()->convert($unit2, $value);    
                    break; 
               case $this->unit::MM:
                    $result = InstanceLength::getMm()->convert($unit2, $value);    
                    break; 
               case $this->unit::YD:
                    $result = InstanceLength::getYd()->convert($unit2, $value);    
                    break;
               case $this->unit::FT:
                    $result = InstanceLength::getFt()->convert($unit2, $value);    
                    break;
               case $this->unit::IN:
                    $result = InstanceLength::getIn()->convert($unit2, $value);    
                    break;  
               case $this->unit::NM:
                    $result = InstanceLength::getNm()->convert($unit2, $value);    
                    break;  
               case $this->unit::MICRO:
                    $result = InstanceLength::getMicro()->convert($unit2, $value);    
                    break;                             
               default:
                    $result = '#Erro 501';
                    break;
             }
             return $result;    
      }
     
}