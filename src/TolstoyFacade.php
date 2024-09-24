<?php

namespace Astrogoat\Tolstoy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Tolstoy\Tolstoy
 */
class TolstoyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tolstoy';
    }
}
