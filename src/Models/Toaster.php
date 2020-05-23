<?php

namespace FelixL7\Toast\Models;

class Toaster
{
    private $toasts;

    public function __construct()
    {
        $this->toasts = collect();
    }

    public function toasts() {
        return $this->toasts;
    }

    public function push(Toast $toast) {
        $this->toasts->push($toast);
    }
}