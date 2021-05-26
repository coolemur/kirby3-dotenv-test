<?php

// load dotenv plugins class so getenv can be used outside of closures
require_once __DIR__ . '/../../../global.php';
// require_once __DIR__ . '/../plugins/kirby3-dotenv/global.php';

loadenv([
    'dir' => realpath(__DIR__ . '/../../'),
    'file' => '.env',
]);

return [
    'debug' => true,
    'someOtherSetting' => 'someOtherSetting_value',
    'environment_var_setting' => env('TEST')
];
