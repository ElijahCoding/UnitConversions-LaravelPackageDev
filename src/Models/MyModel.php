<?php

namespace Spatie\UnitConversions\Models;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    protected $guarded = [];

    public function getUpperCasedName(): string
    {
        return strtoupper($this->name);
    }
}
