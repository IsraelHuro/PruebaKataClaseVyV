<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingListKata{

    public function trateProduct(string $sentence): string
    {

        $fullProduct = explode(" ", $sentence);

        if (count($fullProduct) < 3 && count($fullProduct) > 1) {
            $product = $fullProduct[1];
            $number = 1;
            return $fullProduct[1]. ' x'.$number;

        }

        return '';
    }

}