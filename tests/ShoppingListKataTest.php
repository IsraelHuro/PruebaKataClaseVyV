<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\OhceKata;
use Deg540\StringCalculatorPHP\ShoppingListKata;
use PHPUnit\Framework\TestCase;

final class ShoppingListKataTest extends TestCase
{
    private ShoppingListKata $shoppingListKata;
    protected function setUp(): void //setUp es lo que corre antes de cualquier tipo de test
    {
        parent::setUp();
        $this->shoppingListKata = new ShoppingListKata();
    }

    /**
     * @test
     */
    public function emptyListReturnNothing(): void
    {
        $this->assertEquals('',$this->shoppingListKata->trateProduct(''));

    }

    /**
     * @test
     */
    public function givenAProductWithoutNumberAddListOne(): void
    {
        $this->assertEquals('pan x1',$this->shoppingListKata->trateProduct('añadir pan'));
    }

    /**
     * @test
     */
    public function givenAProductWithNumberAddListNumber(): void
    {
        $this->assertEquals('pan x3',$this->shoppingListKata->trateProduct('añadir pan 3'));
    }

    /**
     * @test
     */
    public function givenAProductWithProductInListAddListNumberReturnList(): void
    {
        $this->assertEquals('pan x3',$this->shoppingListKata->trateProduct('añadir pan 3'));
    }




}