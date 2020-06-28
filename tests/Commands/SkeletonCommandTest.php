<?php

namespace Spatie\UnitConversions\Tests\Commands;

use Spatie\UnitConversions\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    public function test_the_skeleton_command_works()
    {
        $this->artisan('skeleton')->assertExitCode(0);
    }

    public function test_the_config_file_value_is_used_as_output()
    {
        $this->artisan('skeleton')
            ->expectsOutput('hi from command')
            ->assertExitCode(0)
            ;

        $text = 'updated text';
        config()->set('skeleton.command_output_text', $text);

        $this->artisan('skeleton')
            ->expectsOutput($text)
            ->assertExitCode(0)
        ;
    }
}
