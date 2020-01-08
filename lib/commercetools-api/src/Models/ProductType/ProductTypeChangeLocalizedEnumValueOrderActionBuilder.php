<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeLocalizedEnumValueOrderAction>
 */
final class ProductTypeChangeLocalizedEnumValueOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?AttributeLocalizedEnumValueCollection
     */
    private $values;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|AttributeLocalizedEnumValueCollection
     */
    public function getValues()
    {
        return $this->values;
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
    public function withValues(?AttributeLocalizedEnumValueCollection $values)
    {
        $this->values = $values;

        return $this;
    }

    public function build(): ProductTypeChangeLocalizedEnumValueOrderAction
    {
        return new ProductTypeChangeLocalizedEnumValueOrderActionModel(
            $this->attributeName,
            $this->values
        );
    }

    public static function of(): ProductTypeChangeLocalizedEnumValueOrderActionBuilder
    {
        return new self();
    }
}
