<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

abstract class ClassMapModel implements ClassMap
{
    protected static $types = [];

    /**
     * @param string $class
     * @return string
     */
    public function getMappedClass(string $class): string
    {
        if (isset(static::$types[$class])) {
            return static::$types[$class];
        }
        return $class;
    }
}
