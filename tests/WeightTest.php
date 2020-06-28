<?php

namespace Spatie\UnitConversions\Tests;

use Spatie\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKolograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
