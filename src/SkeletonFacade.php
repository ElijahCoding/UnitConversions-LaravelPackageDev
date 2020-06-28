<?php

namespace Spatie\UnitConversions;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\UnitConversions\Weight
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
