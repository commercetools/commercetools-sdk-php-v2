<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

class ProductTypeChangePlainEnumValueOrderActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangePlainEnumValueOrderAction {
    const DISCRIMINATOR_VALUE = 'changePlainEnumValueOrder';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var AttributePlainEnumValueCollection
     */
    protected $values;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangePlainEnumValueOrderAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        if (is_null($this->values)) {
            $value = $this->raw(ProductTypeChangePlainEnumValueOrderAction::FIELD_VALUES);
            if (is_null($value)) {
                return $this->mapData(AttributePlainEnumValueCollection::class, null);
            }
            $value = $this->mapData(AttributePlainEnumValueCollection::class, $value);
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
     * @param AttributePlainEnumValueCollection $values
     * @return $this
     */
    public function setValues(AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

}
