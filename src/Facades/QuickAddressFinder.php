<?php

namespace Hammadzafar05\QuickAddressFinder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hammadzafar05\QuickAddressFinder\QuickAddressFinder
 */
class QuickAddressFinder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hammadzafar05\QuickAddressFinder\QuickAddressFinder::class;
    }
}
