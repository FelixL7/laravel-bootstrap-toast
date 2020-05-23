<?php

return [

    //time format displayed on the toast
    'time-format' => 'H:i',

    //timezone for the timestamp displayed on the toast
    //if set to null, it uses config(app.timezone)
    'timezone' => null,

    //time, how long the toast should be displayed
    'base-delay' => 10000,
    //this is the time in ms, which is added to the delay for each additional toast
    'delay-increment' => 1000,
];