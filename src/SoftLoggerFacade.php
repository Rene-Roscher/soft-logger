<?php

namespace RServices\SoftLogger;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RServices\SoftLogger\SoftLogger
 * @method static log($content, $file = 'soft-logger.log', $type = 'ERROR');
 */
class SoftLoggerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'soft-logger';
    }
}
