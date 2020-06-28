<?php

namespace Spatie\UnitConversions;

class Temperature
{
    private float $celsius;

    public static function fromCelsius(float $celcius)
    {
        return new static($celcius);
    }

    public function __construct(float $celcius)
    {
        $this->celsius = $celcius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
