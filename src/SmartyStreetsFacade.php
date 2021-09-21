<?php

namespace TechBizz\SmartyStreets;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TechBizz\SmartyStreets\SmartyStreetsService
 */
class SmartyStreetsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smartyStreet';
    }
}
