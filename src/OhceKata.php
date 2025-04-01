<?php

namespace Deg540\StringCalculatorPHP;

class OhceKata{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function sayHello(int $time): string
    {
        if (($time > 20 && $time <= 24) || ($time >= 0 && $time <= 6)) {
            return "Buenas Noches ".$this->nombre;
        }

        if ($time > 6  && $time <= 12) {
            return "Buenos Dias ".$this->nombre;
        }

        if ($time > 12  && $time <= 20) {
            return "Buenas Tardes ".$this->nombre;
        }
        return $this->nombre;
    }
    public function revert(string $sentence): string
    {
        if ($sentence === strrev($sentence)) {
            return strrev($sentence) . '/n¡Bonita Palabra!';
        }

        if ($sentence === 'Stop!') {
            return 'Adios '.$this->nombre;
        }
        return strrev($sentence);
    }
}