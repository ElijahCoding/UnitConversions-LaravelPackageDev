<?php

namespace Spatie\UnitConversions\Tests\Commands;

use Spatie\UnitConversions\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    public function test_the_skeleton_command_works()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }
}
