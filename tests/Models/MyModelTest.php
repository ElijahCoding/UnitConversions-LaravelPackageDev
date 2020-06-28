<?php

namespace Spatie\UnitConversions\Tests\Models;

use Illuminate\Support\Facades\DB;
use Spatie\UnitConversions\Models\MyModel;
use Spatie\UnitConversions\Tests\TestCase;

class MyModelTest extends TestCase
{
    public function test_it_can_create_a_model()
    {
        $model = MyModel::create([
            'name' => 'john',
        ]);

        $this->assertDatabaseCount('my_models', 1);

        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
