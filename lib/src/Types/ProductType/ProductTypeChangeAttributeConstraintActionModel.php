<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeAttributeConstraintActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeAttributeConstraintAction
{
    const DISCRIMINATOR_VALUE = 'changeAttributeConstraint';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var string
     */
    protected $newValue;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeAttributeConstraintAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return string
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            $value = $this->raw(ProductTypeChangeAttributeConstraintAction::FIELD_NEW_VALUE);
            $value = (string)$value;
            $this->newValue = $value;
        }
        return $this->newValue;
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
     * @param string $newValue
     * @return $this
     */
    public function setNewValue(string $newValue)
    {
        $this->newValue = (string)$newValue;

        return $this;
    }

}
