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
        ob_start();
        return Cache::has(static::$key);
    }

    /**
     * @return string
     */
    public static function tearDown()
    {
//        $html = "prova";

        $html = ob_get_clean();
        return Cache::tags('views')
            ->rememberForever($key, function () use ($html) {
                return $html;
        });
    }
}