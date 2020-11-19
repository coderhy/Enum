<?php

namespace CoderHe\Enum;

class BaseEnum
{
    public static $currentClass;

    /* 
        判断常量是否是此类中定义的
        @param $value
        @return bool
    */
    public static function isEnum($value)
    {
        // self::$currentClass = static::class;
        if (isset(self::$currentClass::$_defines[$value]))
            return true;

        return false;
    }

    /* 
        根据常量获取此类中的解释
        @param $value
        @return string
    */
    public static function valueOf($value = 0, $default = "")
    {
        self::$currentClass = static::class;
        if (self::isEnum($value))
            return self::$currentClass::$_defines[$value];

        return $default;
    }
}
