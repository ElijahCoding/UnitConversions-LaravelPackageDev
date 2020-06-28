<?php

namespace Spatie\UnitConversions\Tests\Http\Controllers;

use Spatie\UnitConversions\Tests\TestCase;

class MyPackageControllerTest extends TestCase
{
    public function test_my_package_controller_returns_ok()
    {
        $this->get('/my-package-routes')
            ->assertOk()
            ->assertSee('hello from view');
    }
}
