<?php
namespace CamboDev\DateConverter;

use Illuminate\Support\Facades\Facade;

class KmFormat extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(KhmerDateTime::class);

        return KhmerDateTime::class;
    }
}
