<?php
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    public function testIsBubbleSortObject()
    {
        $this->assertInstanceOf(BubbleSort::class, new BubbleSort());
    }

    /**
     * @dataProvider arraysProvider
     */
    public function testSort($input, $expected)
    {

        $bubble = new BubbleSort();
        $input = $bubble->sort($input);
        $this->assertEquals($expected, $input);
    }
    public function arraysProvider() {
        return [
            [[7,8,1,2,3,4,5,6],[1,2,3,4,5,6,7,8]],
            [[8,7,6,5,4,3,2,1],[1,2,3,4,5,6,7,8]],
            [[3,2,5,7,8,6,4,1],[1,2,3,4,5,6,7,8]],
            [[5,8,6,3,2,4,7,1],[1,2,3,4,5,6,7,8]]
        ];
    }
}