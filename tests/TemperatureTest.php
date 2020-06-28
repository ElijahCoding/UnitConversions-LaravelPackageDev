<?php

namespace Spatie\UnitConversions\Tests;

use Spatie\UnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahreinheit()
    {
        $fahreinheit = Temperature::forCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahreinheit);
    }
}
