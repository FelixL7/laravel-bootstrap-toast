<?php

namespace FelixL7\Toast\Models;

class Toaster
{
    private $toasts;
    private $delayOffset;
    private $delayOffsetIncrement;

    public function __construct()
    {
        $this->toasts = collect();
        $this->delayOffset = 0;
        $this->delayOffsetIncrement = config('bootstrap-toast.delay-increment') ?? 0;
    }

    public function toasts() {
        return $this->toasts;
    }

    public function push(Toast $toast) {
        $toast->setDelay($toast->delay + $this->delayOffset);
        $this->incrementDelayOffset();
        $this->toasts->push($toast);
    }

    private function incrementDelayOffset() {
        $this->delayOffset += $this->delayOffsetIncrement;
    }
}