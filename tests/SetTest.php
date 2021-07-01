<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\Set;

class SetTest extends TestCase
{
    /** @var array */
    private $coll;

    public function setUp(): void
    {
        $this->coll = [
            'a' => [
                'b' => [
                    'c' => 3
                ]
            ]
        ];
    }

    public function testSet1(): void
    {
        $set = new Set();
        $set->set($this->coll, ['a', 'b', 'c'], 4);
        $this->assertEquals(4, $this->coll['a']['b']['c']);
    }

    public function testSet2(): void
    {
        $set = new Set();
        $set->set($this->coll, ['a', 'z'], 5);
        $this->assertEquals(5, $this->coll['a']['z']);
        $this->assertEquals(3, $this->coll['a']['b']['c']);
    }

    public function testSet3(): void
    {
        $set = new Set();
        $temp = $this->coll;
        $set->set($this->coll, [], 5);
        $this->assertEquals($temp, $this->coll);
    }
}
