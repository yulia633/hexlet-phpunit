<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\Stack;

class StackTest extends TestCase
{
    public function testMainFlow(): void
    {
        $stack = new Stack();

        $stack->make();
        // Приобразуем объект в массив
        $objectToArray = $stack->objectToArray($stack);
        // Добавляем два элемента в стек и затем извлекаем их
        $stack->push($objectToArray, 'one');
        $stack->push($objectToArray, 'two');

        $value1 = $stack->pop($objectToArray);
        $this->assertEquals('two', $value1);
        $value2 = $stack->pop($objectToArray);
        $this->assertEquals('one', $value2);
    }

    public function testIsEmpty(): void
    {
        $stack = new Stack();

        $stack->make();
        $objectToArray = $stack->objectToArray($stack);

        $this->assertTrue($stack->isEmpty($objectToArray));
        $stack->push($objectToArray, 'one');
        $this->assertFalse($stack->isEmpty($objectToArray));
        $stack->pop($objectToArray);
        $this->assertTrue($stack->isEmpty($objectToArray));
    }

    public function testPop(): void
    {
        // Ожидание ставится до вызова кода
        $this->expectException(\Exception::class);

        $stack = new Stack();

        $stack->make();
        $objectToArray = $stack->objectToArray($stack);
        $stack->pop($objectToArray);
    }
}
