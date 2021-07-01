<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\Cart;

class CartTest extends TestCase
{
    public function testCart(): void
    {
        $cart = new Cart();
        $cart->addItem(['name' => 'car', 'price' => 100], 3);
        $cart->addItem(['name' => 'tv', 'price' => 10], 5);

        $this->assertEquals(2, count($cart->getItems()));
        $this->assertEquals(8, $cart->getCount());
    }

    public function testCartCost(): void
    {
        $cart = new Cart();
        $cart->addItem(['name' => 'car', 'price' => 100], 3);
        $cart->addItem(['name' => 'tv', 'price' => 10], 5);

        $this->assertEquals(350, $cart->getCost());
    }
}
