<?php
namespace CamboDev\DateConverter;

use Illuminate\Support\Facades\Facade;

class KmFormatFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'CamboDev\DateConverter\KmFormat';
    }
}
