<?php

namespace App;


/**
 * Class Matriushka
 * @package App
 */
class Matriushka
{
    /**
     * @param $expression
     * @return string
     */
    public static function setUp($model)
    {

        return 'hola';
    }

    /**
     * @return string
     */
    public static function tearDown()
    {
        return 'adeu';
    }
}