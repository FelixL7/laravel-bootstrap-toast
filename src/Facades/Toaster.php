<?php

namespace FelixL7\Toast\Facades;

use Illuminate\Support\Facades\Facade;

class Toaster extends Facade 
{
    protected static function getFacadeAccessor() {
        return 'bootstrap-toaster';
    }
}