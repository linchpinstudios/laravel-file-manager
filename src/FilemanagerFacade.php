<?php
namespace Illuminate\Support\Facades;

use HipsterJazzbo\Landlord\Landlord;

/**
 * @see \Illuminate\Cache\CacheManager
 * @see \Illuminate\Cache\Repository
 */
class Filemanager extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filemanager';
    }
}
