<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeChangeAttributeConstraintAction>
 */
final class ProductTypeChangeAttributeConstraintActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?string
     */
    private $newValue;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?string $newValue
     * @return $this
     */
    public function withNewValue(?string $newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }


    public function build(): ProductTypeChangeAttributeConstraintAction
    {
        return new ProductTypeChangeAttributeConstraintActionModel(
            $this->attributeName,
            $this->newValue
        );
    }

    public static function of(): ProductTypeChangeAttributeConstraintActionBuilder
    {
        return new self();
    }
}
