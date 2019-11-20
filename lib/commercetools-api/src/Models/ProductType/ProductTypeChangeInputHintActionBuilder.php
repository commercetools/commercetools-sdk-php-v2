<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeInputHintAction>
 */
final class ProductTypeChangeInputHintActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $newValue;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @return null|string
     */
    public function getNewValue()
    {
        return $this->newValue;
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
    public function withNewValue(?string $newValue)
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

    public function build(): ProductTypeChangeInputHintAction
    {
        return new ProductTypeChangeInputHintActionModel(
            $this->newValue,
            $this->attributeName
        );
    }

    public static function of(): ProductTypeChangeInputHintActionBuilder
    {
        return new self();
    }
}
