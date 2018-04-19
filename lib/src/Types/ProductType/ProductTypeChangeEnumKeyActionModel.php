<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeEnumKeyActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeEnumKeyAction
{
    const DISCRIMINATOR_VALUE = 'changeEnumKey';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $newKey;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getNewKey()
    {
        if (is_null($this->newKey)) {
            $value = $this->raw(ProductTypeChangeEnumKeyAction::FIELD_NEW_KEY);
            $value = (string)$value;
            $this->newKey = $value;
        }
        return $this->newKey;
    }

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName(string $attributeName)
    {
        $this->attributeName = (string)$attributeName;

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
     * @param string $newKey
     * @return $this
     */
    public function setNewKey(string $newKey)
    {
        $this->newKey = (string)$newKey;

        return $this;
    }

}
