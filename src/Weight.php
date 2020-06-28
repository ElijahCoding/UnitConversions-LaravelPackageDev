<?php

namespace Spatie\UnitConversions;

class Weight
{
    private float $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
    }
}
