<?php

namespace VoyagerThemes;

use Illuminate\Support\Facades\Facade;

class VoyagerThemesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return VoyagerThemes::class;
    }
}
