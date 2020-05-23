<?php

namespace FelixL7\Toast\Models;

use FelixL7\Toast\Observers\ToastObserver;

class Toast
{
    private $observer;
    
    public $title;
    public $message;
    public $type;
    public $delay;
    public $time;

    public function __construct($title, $message, $type)
    {
        $this->title = $title;
        $this->message = $message;
        $this->type = $type;
        $this->time = (new \DateTime('now'))->setTimezone(new \DateTimeZone('Europe/Berlin'))->format('H:i');

        $this->observer = new ToastObserver;
    }

    public static function default($title, $message) {
        $toast = new Toast($title, $message, 'default');
        $toast->observeCreated();

        return $toast;
    }

    public static function success($title, $message) {
        $toast = new Toast($title, $message, 'success');
        $toast->observeCreated();

        return $toast;
    }

    public static function error($title, $message) {
        $toast = new Toast($title, $message, 'error');
        $toast->observeCreated();

        return $toast;
    }

    public static function warning($title, $message) {
        $toast = new Toast($title, $message, 'warning');
        $toast->observeCreated();

        return $toast;
    }

    public static function info($title, $message) {
        $toast = new Toast($title, $message, 'info');
        $toast->observeCreated();

        return $toast;
    }

    public static function custom($title, $message, $type) {
        $toast = new Toast($title, $message, $type);
        $toast->observeCreated();

        return $toast;
    }

    private function observeCreated() {
        $this->observer->created($this);
    }
}