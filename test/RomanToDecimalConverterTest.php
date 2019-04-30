<?php

class RomanToDecimalConverterTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldAssertTrueIsReallyTrue()
    {
        $this->assertEquals(true, true);
    }

    /**
     * @test
     */
    public function shouldConvertRomanNumberToDecimal()
    {
        $decimalNumber = romanToDecimal('MCCCIII');

        $this->assertEquals(1303, $decimalNumber);
    }
}