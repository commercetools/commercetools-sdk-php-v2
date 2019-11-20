<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeRemoveEnumValuesAction>
 */
final class ProductTypeRemoveEnumValuesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $keys;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @return null|array
     */
    public function getKeys()
    {
        return $this->keys;
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
    public function withKeys(?array $keys)
    {
        $this->keys = $keys;

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

    public function build(): ProductTypeRemoveEnumValuesAction
    {
        return new ProductTypeRemoveEnumValuesActionModel(
            $this->keys,
            $this->attributeName
        );
    }

    public static function of(): ProductTypeRemoveEnumValuesActionBuilder
    {
        return new self();
    }
}
