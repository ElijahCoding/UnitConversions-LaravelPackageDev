<?php

namespace Spatie\UnitConversions\Tests;

use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\UnitConversions\UnitConversionsServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            UnitConversionsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
//        $app['config']->set('database.default', 'sqlite');
//        $app['config']->set('database.connections.sqlite', [
//            'driver' => 'sqlite',
//            'database' => ':memory:',
//            'prefix' => '',
//        ]);
        Schema::dropAllTables();

        include_once __DIR__.'/../database/migrations/create_skeleton_table.php.stub';
        (new \CreateSkeletonTable())->up();
    }
}
