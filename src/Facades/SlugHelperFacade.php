<?php

namespace Sufian\SlugHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sufian\SlugHelper\SlugHelper
 */
class SlugHelperFacade extends Facade
{
    /**
     * Get the root object behind the facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slug-helper';
    }
}
