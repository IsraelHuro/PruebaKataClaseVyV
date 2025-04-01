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
    public function EmptyListReturnNothing(): void
    {
        $product = new ShoppingListKata();

        $result = $product->trateProduct('');

        $this->assertEquals('', $result);

    }


}