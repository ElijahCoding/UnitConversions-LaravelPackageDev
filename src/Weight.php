<?php

namespace Spatie\UnitConversions;

class Weight
{
    private float $kilograms;

    public static function fromKolograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs(): float
    {
<<<<<<< HEAD
        return $this->kilograms * 2.204623;
=======
>>>>>>> ee3fc97f78bc2fb8dac81d3e3777bd05d82161e4
    }
}
