<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeAttributeNameActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeAttributeNameAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeName';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var string
     */
    protected $newAttributeName;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return string
     */
    public function getNewAttributeName()
    {
        if (is_null($this->newAttributeName)) {
            $value = $this->raw(ProductTypeChangeAttributeNameAction::FIELD_NEW_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->newAttributeName = $value;
        }
        return $this->newAttributeName;
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
     * @param string $newAttributeName
     * @return $this
     */
    public function setNewAttributeName(string $newAttributeName)
    {
        $this->newAttributeName = (string)$newAttributeName;

        return $this;
    }

}
