<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeAddPlainEnumValueAction>
 */
final class ProductTypeAddPlainEnumValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var AttributePlainEnumValue|?AttributePlainEnumValueBuilder
     */
    private $value;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|AttributePlainEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof AttributePlainEnumValueBuilder ? $this->value->build() : $this->value;
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
    public function withValue(?AttributePlainEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?AttributePlainEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): ProductTypeAddPlainEnumValueAction
    {
        return new ProductTypeAddPlainEnumValueActionModel(
            $this->attributeName,
            ($this->value instanceof AttributePlainEnumValueBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): ProductTypeAddPlainEnumValueActionBuilder
    {
        return new self();
    }
}
