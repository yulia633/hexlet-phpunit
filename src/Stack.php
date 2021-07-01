<?php

namespace Php\Package;

// Вымышленная библиотека
class Stack
{
    public function make(): array
    {
        return [];
    }

    public function isEmpty(array $stack): bool
    {
        return count($stack) === 0;
    }

    public function push(array &$stack, string $element): void
    {
        array_push($stack, $element);
    }

    public function pop(array &$stack): string
    {
        if ($this->isEmpty($stack)) {
            throw new \Exception("Stack is empty!");
        }
        return array_pop($stack);
    }

    public function objectToArray(object $data): array
    {
        if (is_object($data)) {
            $dataModified = get_object_vars($data);
            return $dataModified;
        }
    }
}
