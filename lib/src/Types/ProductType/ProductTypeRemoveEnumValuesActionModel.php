<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeRemoveEnumValuesActionModel extends ProductTypeUpdateActionModel implements ProductTypeRemoveEnumValuesAction
{
    const DISCRIMINATOR_VALUE = 'removeEnumValues';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var array
     */
    protected $keys;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeRemoveEnumValuesAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return array
     */
    public function getKeys()
    {
        if (is_null($this->keys)) {
            $value = $this->raw(ProductTypeRemoveEnumValuesAction::FIELD_KEYS);
            $value = (array)$value;
            $this->keys = $value;
        }
        return $this->keys;
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
     * @param $keys
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;

        return $this;
    }

}
