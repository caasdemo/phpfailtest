<?php

class CurrencyTest extends PHPUnit_Framework_TestCase
{

    protected $currency;
    
    public function setUp()
    {
        $this->currency = new Currency();
    }

    public function testInitialValues()
    {
        $this->assertEquals($this->currency->getAmount(), 1);
        $this->assertEquals($this->currency->getCurrency(), "t");
    }

}

?>
