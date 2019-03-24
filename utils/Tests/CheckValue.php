<?php
namespace Utils\Tests;

class CheckValue
{
    static function varDump($value)
    {
        echo '<pre>';
        var_dump($value);
        die();
    }
}