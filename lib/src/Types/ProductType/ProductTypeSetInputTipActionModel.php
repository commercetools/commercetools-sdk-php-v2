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

class ProductTypeSetInputTipActionModel extends ProductTypeUpdateActionModel implements ProductTypeSetInputTipAction {
    const DISCRIMINATOR_VALUE = 'setInputTip';

    /**
     * @var string
     */
    protected $attributeName;
    /**
     * @var LocalizedString
     */
    protected $inputTip;

    /**
     * @return string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            $value = $this->raw(ProductTypeSetInputTipAction::FIELD_ATTRIBUTE_NAME);
            $value = (string)$value;
            $this->attributeName = $value;
        }
        return $this->attributeName;
    }
    /**
     * @return LocalizedString
     */
    public function getInputTip()
    {
        if (is_null($this->inputTip)) {
            $value = $this->raw(ProductTypeSetInputTipAction::FIELD_INPUT_TIP);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->inputTip = $value;
        }
        return $this->inputTip;
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
     * @param LocalizedString $inputTip
     * @return $this
     */
    public function setInputTip(LocalizedString $inputTip)
    {
        $this->inputTip = $inputTip;

        return $this;
    }

}
