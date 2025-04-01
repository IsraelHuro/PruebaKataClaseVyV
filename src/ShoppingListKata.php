<?php

namespace Deg540\StringCalculatorPHP;

class ShoppingListKata{

    public function trateProduct(string $sentence): string
    {
        $fullProduct = explode(" ", $sentence);

        if (count($fullProduct) < 3 && count($fullProduct) > 1) {
            $number = 1;
            $lista = array( $fullProduct[1]. ' x'.$number);
            foreach ($lista as $product) {
                return $product;
            }
        }

        if (count($fullProduct) === 3) {
            $number = $fullProduct[2];
            $lista = array( $fullProduct[1]. ' x'.$number);
            foreach ($lista as $product) {
                return $product;
            }
        }

        return '';
    }

}