<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangePlainEnumValueOrderAction>
 */
final class ProductTypeChangePlainEnumValueOrderActionBuilder implements Builder
{
    /**
     * @var ?AttributePlainEnumValueCollection
     */
    private $values;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @return null|AttributePlainEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
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
    public function withValues(?AttributePlainEnumValueCollection $values)
    {
        $this->values = $values;

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

    public function build(): ProductTypeChangePlainEnumValueOrderAction
    {
        return new ProductTypeChangePlainEnumValueOrderActionModel(
            $this->values,
            $this->attributeName
        );
    }

    public static function of(): ProductTypeChangePlainEnumValueOrderActionBuilder
    {
        return new self();
    }
}
