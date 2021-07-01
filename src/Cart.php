<?php

namespace Php\Package;

class Cart
{
     /** @var array */
    private $items = [];

    public function addItem(array $good, int $count): void
    {
        $this->items[] = ['good' => $good, 'count' => $count];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getCount(): int
    {
        return array_reduce($this->items, fn ($acc, $item) => $acc + $item['count'], 0);
    }

     /** @return int|float|null */
    public function getCost()
    {
        return array_reduce($this->items, fn ($acc, $item) => $acc + $item['good']['price'] * $item['count']);
    }
}
