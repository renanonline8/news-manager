<?php
namespace Utils\Config;

class ParseIni
{
    public static $localIni;

    public static function parsed()
    {
        return parse_ini_file(self::$localIni, true);
    }
}