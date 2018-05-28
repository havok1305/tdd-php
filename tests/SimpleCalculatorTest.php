<?php
use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    public function testSumExists() {
        $this->assertTrue(
            method_exists(SimpleCalculator::class, 'sum'),
            'Classe não tem o método de soma'
        );
    }
    public function testSumReturnsNumber()
    {
        $this->assertInternalType('numeric', SimpleCalculator::sum(1,2));
    }
    /**
     *
     * @dataProvider providerSum
     */
    public function testSum($a, $b, $expected)
    {
        $this->assertEquals($expected, SimpleCalculator::sum($a, $b));
    }

    public function providerSum()
    {
        return [
            [0,1,1],
            [1,1,2],
            [3,2,5],
            [1,2,3],
            [5,6,11]
        ];
    }

    public function testSubExists() {
        $this->assertTrue(
            method_exists(SimpleCalculator::class, 'sub'),
            'Classe não tem o método de subtração'
        );
    }

    public function testSubReturnsNumber()
    {
        $this->assertInternalType('numeric', SimpleCalculator::sub(1,2));
    }

    /**
     *
     * @dataProvider providerSub
     */
    public function testSub($a, $b, $expected)
    {
        $this->assertEquals($expected, SimpleCalculator::sub($a, $b));
    }

    public function providerSub()
    {
        return [
            [0,0,0],
            [2,1,1],
            [3,2,1],
            [1,2,-1],
            [5,6,-1]
        ];
    }
}