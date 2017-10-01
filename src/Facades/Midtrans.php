<?php

namespace Imam\Midtrans\Facades;

use Imam\Midtrans\Main;

class Midtrans extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Main::class;
    }
}