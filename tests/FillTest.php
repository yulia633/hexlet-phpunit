<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\Fill;

class FillTest extends TestCase
{
    /** @var array */
    private $data;

    public function setUp(): void
    {
        $this->data = [1, 2, 3, 4];
    }

    public function testFill1(): void
    {
        $fill = new Fill();
        $result1 = $fill->fill($this->data, '*', 1, 3);
        $expected1 =  $this->data = [1, '*', '*', 4];
        $this->assertEquals($expected1, $result1);

        $result2 = $fill->fill($this->data, '*', 1, 3);
        $expected2 =  $this->data = [1, '*', '*', '*'];
        $this->assertNotEquals($expected2, $result2);

        $result3 = $fill->fill($this->data, '*');
        $expected3 =  $this->data = ['*', '*', '*', '*'];
        $this->assertEquals($expected3, $result3);

        $result5 = $fill->fill($this->data, '*', 0, 10);
        $expected5 =  $this->data = ['*', '*', '*', '*'];
        $this->assertEquals($expected5, $result5);
    }

    public function testFill2(): void
    {
        $fill = new Fill();
        $fill->fill($this->data, '*', 1, 3);
        $this->assertEquals([1, '*', '*', 4], $this->data);
    }

    public function testFil3(): void
    {
        $fill = new Fill();
        $fill->fill($this->data, '*');
        $this->assertEquals(['*', '*', '*', '*'], $this->data);
    }

    public function testFill4(): void
    {
        $fill = new Fill();
        $fill->fill($this->data, '*', 10, 12);
        $this->assertEquals([1, 2, 3, 4], $this->data);
    }

    public function testFill5(): void
    {
        $fill = new Fill();
        $fill->fill($this->data, '*', 2, 2);
        $this->assertEquals([1, 2, 3, 4], $this->data);
    }
}
