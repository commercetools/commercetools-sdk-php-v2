<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\Common\Resource;

interface CustomObject extends Resource
{
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getContainer();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $container
     * @return $this
     */
    public function setContainer(string $container);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

}
