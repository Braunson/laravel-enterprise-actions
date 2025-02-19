<?php

namespace Geekybeaver\LaravelEnterpriseActions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Geekybeaver\LaravelEnterpriseActions\LaravelEnterpriseActions
 */
class LaravelEnterpriseActions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Geekybeaver\LaravelEnterpriseActions\LaravelEnterpriseActions::class;
    }
}
