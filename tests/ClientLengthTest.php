<?php
namespace Tigo\UnitsConversion\Tests;

use PHPUnit\Framework\TestCase;
use Tigo\UnitsConversion\ClientLength;

class ClientLengthTest extends TestCase
{

    public function testConvert()
    {
        //$this->hmConvert();
        //$this->damConvert();
        //$this->meterConvert();
        //$this->dmConvert();
        //$this->cmConvert();
        //$this->mmConvert();
        //$this->ydConvert();
        //$this->ftConvert();
       //$this->inConvert();
        //$this->KmConvert();
    }

    public function hmConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(1,1,23), 2), 23); 
        $this->assertEquals( round($client->convert(1,2,23), 2), 230); 
        $this->assertEquals( round($client->convert(1,3,23), 2), 2300);
        $this->assertEquals( round($client->convert(1,4,23), 2), 23000);
        $this->assertEquals( round($client->convert(1,5,23), 2), 230000);
        $this->assertEquals( round($client->convert(1,6,23), 2), 2300000);
        $this->assertEquals( round($client->convert(1,7,23), 2), 2515.31);
        $this->assertEquals( round($client->convert(1,8,23), 2), 7545.93);  
        $this->assertEquals( round($client->convert(1,9,23), 2), 90551.18);  
        $this->assertEquals( round($client->convert(1,10,23), 2), 2.3);        
    }

    public function damConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(2,1,23), 2), 2.3); 
        $this->assertEquals( round($client->convert(2,2,23), 2), 23); 
        $this->assertEquals( round($client->convert(2,3,23), 2), 230);
        $this->assertEquals( round($client->convert(2,4,23), 2), 2300);
        $this->assertEquals( round($client->convert(2,5,23), 2), 23000);
        $this->assertEquals( round($client->convert(2,6,23), 2), 230000);
        $this->assertEquals( round($client->convert(2,7,23), 2), 251.53);
        $this->assertEquals( round($client->convert(2,8,23), 2), 754.59);  
        $this->assertEquals( round($client->convert(2,9,23), 2), 9055.12);  
        $this->assertEquals( round($client->convert(2,10,23), 2), 0.23); 
    }

    public function meterConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(3,1,23), 2), 0.23); 
        $this->assertEquals( round($client->convert(3,2,23), 2), 2.3); 
        $this->assertEquals( round($client->convert(3,3,23), 2), 23);
        $this->assertEquals( round($client->convert(3,4,23), 2), 230);
        $this->assertEquals( round($client->convert(3,5,23), 2), 2300);
        $this->assertEquals( round($client->convert(3,6,23), 2), 23000);
        $this->assertEquals( round($client->convert(3,7,23), 2), 25.15);
        $this->assertEquals( round($client->convert(3,8,23), 2), 75.46);  
        $this->assertEquals( round($client->convert(3,9,23), 2), 905.51);   
        $this->assertEquals( round($client->convert(3,10,23), 2), 0.02);        
    }

    public function dmConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(4,1,23), 2), 0.02); 
        $this->assertEquals( round($client->convert(4,2,23), 2), 0.23); 
        $this->assertEquals( round($client->convert(4,3,23), 2), 2.3);
        $this->assertEquals( round($client->convert(4,4,23), 2), 23); 
        $this->assertEquals( round($client->convert(4,5,23), 2), 230);
        $this->assertEquals( round($client->convert(4,6,23), 2), 2300);
        $this->assertEquals( round($client->convert(4,7,23), 2), 2.52);
        $this->assertEquals( round($client->convert(4,8,23), 2), 7.55);  
        $this->assertEquals( round($client->convert(4,9,23), 2), 90.55);   
        $this->assertEquals( round($client->convert(4,10,23), 2), 0.00);          
    }

    public function cmConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(5,1,23), 2), 0.00); 
        $this->assertEquals( round($client->convert(5,2,23), 2), 0.02); 
        $this->assertEquals( round($client->convert(5,3,23), 2), 0.23);
        $this->assertEquals( round($client->convert(5,4,23), 2), 2.3);
        $this->assertEquals( round($client->convert(5,5,23), 2), 23);
        $this->assertEquals( round($client->convert(5,6,23), 2), 230);
        $this->assertEquals( round($client->convert(5,7,23), 2), 0.25);
        $this->assertEquals( round($client->convert(5,8,23), 2), 0.75);  
        $this->assertEquals( round($client->convert(5,9,23), 2), 9.06);   
        $this->assertEquals( round($client->convert(5,10,23), 2), 0.00);
    }

    public function mmConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(6,1,23), 2), 0.00); 
        $this->assertEquals( round($client->convert(6,2,23), 2), 0.00); 
        $this->assertEquals( round($client->convert(6,3,23), 2), 0.02);
        $this->assertEquals( round($client->convert(6,4,23), 2), 0.23); 
        $this->assertEquals( round($client->convert(6,5,23), 2), 2.3);
        $this->assertEquals( round($client->convert(6,6,23), 2), 23);
        $this->assertEquals( round($client->convert(6,7,23), 2), 0.03);
        $this->assertEquals( round($client->convert(6,8,23), 2), 0.08);  
        $this->assertEquals( round($client->convert(6,9,23), 2), 0.91);   
        $this->assertEquals( round($client->convert(6,10,23), 2), 0.00);
    }

    public function ydConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(7,1,23), 2), 0.21);  
        $this->assertEquals( round($client->convert(7,2,23), 2), 2.10);   
        $this->assertEquals( round($client->convert(7,3,23), 2), 21.03);
        $this->assertEquals( round($client->convert(7,4,23), 2), 210.31); 
        $this->assertEquals( round($client->convert(7,5,23), 2), 2103.12);
        $this->assertEquals( round($client->convert(7,6,23), 2), 21031.2);
        $this->assertEquals( round($client->convert(7,7,23), 2), 23);
        $this->assertEquals( round($client->convert(7,8,23), 2), 69);   
        $this->assertEquals( round($client->convert(7,9,23), 2), 828);   
        $this->assertEquals( round($client->convert(7,10,23), 2), 0.02);
    }

    public function ftConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(8,1,23), 2), 0.07); 
        $this->assertEquals( round($client->convert(8,2,23), 2), 0.70); 
        $this->assertEquals( round($client->convert(8,3,23), 2), 7.01);
        $this->assertEquals( round($client->convert(8,4,23), 2), 70.10);
        $this->assertEquals( round($client->convert(8,5,23), 2), 701.04);
        $this->assertEquals( round($client->convert(8,6,23), 2), 7010.4);
        $this->assertEquals( round($client->convert(8,7,23), 2), 7.67);
        $this->assertEquals( round($client->convert(8,8,23), 2), 23);  
        $this->assertEquals( round($client->convert(8,9,23), 2), 276);   
        $this->assertEquals( round($client->convert(8,10,23), 2), 0.01); 
    }

    public function inConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(9,1,23), 2), 0.01); 
        $this->assertEquals( round($client->convert(9,2,23), 2), 0.06); 
        $this->assertEquals( round($client->convert(9,3,23), 2), 0.58);
        $this->assertEquals( round($client->convert(9,4,23), 2), 5.84); 
        $this->assertEquals( round($client->convert(9,5,23), 2), 58.42);
        $this->assertEquals( round($client->convert(9,6,23), 2), 584.2);
        $this->assertEquals( round($client->convert(9,7,23), 2), 0.64);
        $this->assertEquals( round($client->convert(9,8,23), 2), 1.92);  
        $this->assertEquals( round($client->convert(9,9,23), 2), 23);   
        $this->assertEquals( round($client->convert(9,10,23), 2), 0.00);
    }


    public function KmConvert()
    {
        $client = new ClientLength();

        $this->assertEquals( round($client->convert(10,1,23), 2), 230); 
        $this->assertEquals( round($client->convert(10,2,23), 2), 2300); 
        $this->assertEquals( round($client->convert(10,3,23), 2), 23000);
        $this->assertEquals( round($client->convert(10,4,23), 2), 230000);
        $this->assertEquals( round($client->convert(10,5,23), 2), 2300000);
        $this->assertEquals( round($client->convert(10,6,23), 2), 23000000);
        $this->assertEquals( round($client->convert(10,7,23), 2), 25153.11);
        $this->assertEquals( round($client->convert(10,8,23), 2), 75459.32);  
        $this->assertEquals( round($client->convert(10,9,23), 2), 905511.81);   
        $this->assertEquals( round($client->convert(10,10,23), 2), 23);    
    }


}