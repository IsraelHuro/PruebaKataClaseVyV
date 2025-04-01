<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\OhceKata;
use PHPUnit\Framework\TestCase;

final class OhceKataTest extends TestCase
{
    private OhceKata $ohceKata;
    protected function setUp(): void //setUp es lo que corre antes de cualquier tipo de test
    {
        parent::setUp();
        $this->ohceKata = new OhceKata("Israel");
    }

    /**
     * @test
     */
    public function givenAnHourBetween20And6ReturnBuenasNochesName(): void
    {
        $this->assertEquals("Buenas Noches Israel", $this->ohceKata->sayHello(3));
    }

    /**
     * @test
     */
    public function givenAnHourBetween6And12ReturnBuenosDiasName(): void
    {
        $this->assertEquals("Buenos Dias Israel", $this->ohceKata->sayHello(10));
    }

    /**
     * @test
     */
    public function givenAnHourBetween12And20ReturnBuenasTardesName(): void
    {
        $this->assertEquals("Buenas Tardes Israel", $this->ohceKata->sayHello(17));
    }

    /**
     * @test
     */
    public function givenANormalWordReturnTheInverse(): void
    {
        $this->assertEquals("aloh", $this->ohceKata->revert("hola"));
    }

    /**
     * @test
     */
    public function givenAPalindromeWordReturnTheInverseAndMessage(): void
    {
        $this->assertEquals('oto/n¡Bonita Palabra!', $this->ohceKata->revert("oto"));
    }

    /**
     * @test
     */
    public function givenStopWithExclamationSingWordReturnAdiosAndNameUser(): void
    {
        $this->assertEquals('Adios Israel', $this->ohceKata->revert("Stop!"));
    }

    /**
     * @test
     */
    public function givenStopWithoutExclamationSingWordReturnStopReverb(): void
    {
        $this->assertEquals('pots', $this->ohceKata->revert("stop"));
    }

    /**
     * @test
     */
    public function givenOtherPalindromeWordReturnThePalindromeMessage(): void
    {
        $this->assertEquals('reconocer/n¡Bonita Palabra!', $this->ohceKata->revert("reconocer"));
    }

}