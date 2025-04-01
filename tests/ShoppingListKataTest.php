<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\OhceKata;
use Deg540\StringCalculatorPHP\ShoppingListKata;
use PHPUnit\Framework\TestCase;

final class ShoppingListKataTest extends TestCase
{
    /**
     * @test
     */
    public function emptyListReturnNothing(): void
    {
        $product = new ShoppingListKata();

        $result = $product->trateProduct('');

        $this->assertEquals('', $result);

    }

    /**
     * @test
     */
    public function givenAProductWithoutNumberAddListOne(): void
    {
        $product = new ShoppingListKata();

        $result = $product->trateProduct('añadir pan');

        $this->assertEquals('pan x1', $result);
    }

    /**
     * @test
     */
    public function givenAProductWithNumberAddListNumber(): void
    {
        $product = new ShoppingListKata();

        $result = $product->trateProduct('añadir pan 3');

        $this->assertEquals('pan x3', $result);
    }


}