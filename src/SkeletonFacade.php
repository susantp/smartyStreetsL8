<?php

namespace TechBizz\SmartyStreets;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TechBizz\SmartyStreets\SmartyStreets
 */
class SmartyStreetsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smartystreetslaravel';
    }
}
