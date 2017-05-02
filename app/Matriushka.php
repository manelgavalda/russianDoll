<?php

namespace App;
use Cache;


/**
 * Class Matriushka
 * @package App
 */
class Matriushka
{

    protected static $key;
    /**
     * @param $expression
     * @return string
     */
    public static function setUp($model)
    {
        ob_start();

        static::$key = $model->getCacheKey();
//        return 'prova 1';
        return Cache::has(static::$key);
    }

    /**
     * @return string
     */
    public static function tearDown()
    {
//        $html = "prova";

        $html = ob_get_clean();
        echo $html;
    }
}