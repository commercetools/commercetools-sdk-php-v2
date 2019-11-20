<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeLocalizedEnumValueLabelAction>
 */
final class ProductTypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
{
    /**
     * @var AttributeLocalizedEnumValue|?AttributeLocalizedEnumValueBuilder
     */
    private $newValue;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @return null|AttributeLocalizedEnumValue
     */
    public function getNewValue()
    {
        return $this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return $this
     */
    public function withNewValue(?AttributeLocalizedEnumValue $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewValueBuilder(?AttributeLocalizedEnumValueBuilder $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function build(): ProductTypeChangeLocalizedEnumValueLabelAction
    {
        return new ProductTypeChangeLocalizedEnumValueLabelActionModel(
            ($this->newValue instanceof AttributeLocalizedEnumValueBuilder ? $this->newValue->build() : $this->newValue),
            $this->attributeName
        );
    }

    public static function of(): ProductTypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}
