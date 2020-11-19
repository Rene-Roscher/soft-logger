<?php

use RServices\SoftLogger\SoftLoggerFacade as Logger;

if (!function_exists('__log')) {
    function __log($content, $file = 'soft-logger.log', $type = 'DEBUG')
    {
        Logger::log($content, $file, $type);
    }
}
if (!function_exists('__info')) {
    function __info($content, $file = 'soft-logger.log')
    {
        __log($content, 'INFO', 'INFO');
    }
}
if (!function_exists('__debug')) {
    function __debug($content, $file = 'soft-logger.log')
    {
        __log($content, 'DEBUG', 'DEBUG');
    }
}
if (!function_exists('__error')) {
    function __error($content, $file = 'soft-logger.log')
    {
        __log($content, 'DEBUG', 'ERROR');
    }
}
if (!function_exists('log_path')) {
    function log_path($file)
    {
        return storage_path("logs/$file");
    }
}

