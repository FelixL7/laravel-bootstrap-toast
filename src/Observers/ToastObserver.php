<?php

namespace FelixL7\Toast\Observers;

use FelixL7\Toast\Facades\Toaster;
use FelixL7\Toast\Models\Toast;

class ToastObserver
{
    public function created(Toast $toast) {
        Toaster::push($toast);
    }
}