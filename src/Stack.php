<?php

//namespace Hexlet\Phpunit\Stack;
namespace Php\Package;

// Вымышленная библиотека
class Stack
{
    public function make()
    {
        return [];
    }

    public function isEmpty($stack)
    {
        return count($stack) === 0;
    }

    public function push(&$stack, $element)
    {
        array_push($stack, $element);
    }

    public function pop(&$stack)
    {
        if ($this->isEmpty($stack)) {
            throw new \Exception("Stack is empty!");
        }
        return array_pop($stack);
    }

    public function objectToArray($data)
    {
        if (is_object($data)) {
            $dataModified = get_object_vars($data);
            return $dataModified;
        }
    }
}
