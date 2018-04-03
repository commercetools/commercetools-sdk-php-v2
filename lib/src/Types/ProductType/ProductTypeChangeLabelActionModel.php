<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\ProductType\ProductTypeUpdateActionModel;

use Commercetools\Types\Common\LocalizedString;

class ProductTypeChangeLabelActionModel extends ProductTypeUpdateActionModel implements ProductTypeChangeLabelAction {
    const DISCRIMINATOR_VALUE = 'changeLabel';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var LocalizedString
     */
    protected $label;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeChangeLabelAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            $value = $this->raw(ProductTypeChangeLabelAction::FIELD_LABEL);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->label = $value;
        }
        return $this->label;
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
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

}
