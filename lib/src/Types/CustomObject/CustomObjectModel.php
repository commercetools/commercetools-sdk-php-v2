<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Common\Resource;

class CustomObjectModel extends ResourceModel implements CustomObject {
    /**
     * @var string
     */
    protected $container;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getContainer()
    {
        if (is_null($this->container)) {
            $value = $this->raw(CustomObject::FIELD_CONTAINER);
            $value = (string)$value;
            $this->container = $value;
        }
        return $this->container;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(CustomObject::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(CustomObject::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param string $container
     * @return $this
     */
    public function setContainer(string $container)
    {
        $this->container = (string)$container;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

}
