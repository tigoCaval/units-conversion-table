<?php
namespace Tigo\UnitsConversion\Tests;

use PHPUnit\Framework\TestCase;
use Tigo\UnitsConversion\ClientLength;

class ClientLengthTest extends TestCase
{

    public function testConvert()
    {
          $this->checkNm();
          $this->updateNm();
          $this->checkMicro();
          $this->updateMicro();
    }


    public function checkNm()
    {
        $nm = new ClientLength();
        $this->assertEquals( $nm->convert(1,11,23), 2.3e+12); 
        $this->assertEquals( $nm->convert(2,11,23), 2.3e+11);
        $this->assertEquals( $nm->convert(3,11,23), 2.3e+10);
        $this->assertEquals( $nm->convert(4,11,23), 2.3e+9);
        $this->assertEquals( $nm->convert(5,11,23), 2.3e+8);
        $this->assertEquals( $nm->convert(6,11,23), 2.3e+7);
        $this->assertEquals( $nm->convert(7,11,23), 2.10312e+10);
        $this->assertEquals( $nm->convert(8,11,23), 70.104e+8);
        $this->assertEquals( $nm->convert(9,11,23), 584200000);
        $this->assertEquals( $nm->convert(10,11,23), 2.3e+13);
        $this->assertEquals( $nm->convert(11,11,23), 23);
    } 
    
    public function updateNm()
    {
        $nm =  new ClientLength();
        $this->assertEquals($nm->convert(11,1,23), 2.3e-10);
        $this->assertEquals($nm->convert(11,2,23), 2.3e-9); 
        $this->assertEquals($nm->convert(11,3,23), 2.3e-8);
        $this->assertEquals($nm->convert(11,4,23), 2.3e-7);
        $this->assertEquals($nm->convert(11,5,23), 2.3e-6);
        $this->assertEquals($nm->convert(11,6,23), 2.3e-5);
        $this->assertEquals($nm->convert(11,7,23), 2.515310586e-8);
        $this->assertEquals($nm->convert(11,8,23), 7.545931759e-8);
        $this->assertEquals($nm->convert(11,9,23), 9.05511811e-7);
        $this->assertEquals($nm->convert(11,10,23), 2.3e-11);
        $this->assertEquals($nm->convert(11,11,23), 23);
    }


    public function checkMicro()
    {
        $micro = new ClientLength();
        $this->assertEquals( $micro->convert(1,12,23), 2300000000); 
        $this->assertEquals( $micro->convert(2,12,23), 230000000);
        $this->assertEquals( $micro->convert(3,12,23), 23000000);
        $this->assertEquals( $micro->convert(4,12,23), 2300000);
        $this->assertEquals( $micro->convert(5,12,23), 230000);
        $this->assertEquals( $micro->convert(6,12,23), 23000);
        $this->assertEquals( $micro->convert(7,12,23), 21031200);
        $this->assertEquals( $micro->convert(8,12,23), 7010400);
        $this->assertEquals( $micro->convert(9,12,23), 584200);
        $this->assertEquals( $micro->convert(10,12,23), 2.3e+10);
        $this->assertEquals( $micro->convert(11,12,23), 0.023);
        $this->assertEquals( $micro->convert(12,12,23), 23);
    }
    
    public function updateMicro()
    {
        $micro = new ClientLength();
        $this->assertEquals( $micro->convert(12,1,23), 2.3e-7);
        $this->assertEquals( $micro->convert(12,2,23), 0.0000023);
        $this->assertEquals( $micro->convert(12,3,23), 0.000023);
        $this->assertEquals( $micro->convert(12,4,23), 0.00023);
        $this->assertEquals( $micro->convert(12,5,23), 0.0023);
        $this->assertEquals( $micro->convert(12,6,23), 0.023);
        $this->assertEquals( $micro->convert(12,7,23), 0.00002515310586);
        $this->assertEquals( $micro->convert(12,8,23), 0.00007545931759);
        $this->assertEquals( $micro->convert(12,9,23), 0.000905511811);
        $this->assertEquals( $micro->convert(12,10,23), 2.3e-8);
        $this->assertEquals( $micro->convert(12,11,23), 23000);
        $this->assertEquals( $micro->convert(12,12,23), 23);
    }

}