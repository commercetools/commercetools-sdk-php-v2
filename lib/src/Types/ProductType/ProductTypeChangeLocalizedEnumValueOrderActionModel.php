<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangeLocalizedEnumValueOrderActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeLocalizedEnumValueOrderAction {
    const DISCRIMINATOR_VALUE = 'changeLocalizedEnumValueOrder';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributeLocalizedEnumValueCollection
     */
    protected $values;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeLocalizedEnumValueOrderAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(ProductTypeChangeLocalizedEnumValueOrderAction::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(AttributeLocalizedEnumValueCollection::class, null);
            }
            $value = $this->mapData(AttributeLocalizedEnumValueCollection::class, $value);
            $this->values = $value;
        }
        return $this->values;
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
     * @param AttributeLocalizedEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributeLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}
