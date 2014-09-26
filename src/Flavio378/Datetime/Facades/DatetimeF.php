<?php
/**
 * Created by PhpStorm.
 * User: flavio
 * Date: 26/09/14
 * Time: 10:43
 */
namespace Flavio378\Datetime\Facades;
use Illuminate\Support\Facades\Facade;

class DatetimeF extends  Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'datetimef'; }
} 