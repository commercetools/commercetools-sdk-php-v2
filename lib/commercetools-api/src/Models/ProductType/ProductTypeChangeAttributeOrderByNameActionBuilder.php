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
 * @implements Builder<ProductTypeChangeAttributeOrderByNameAction>
 */
final class ProductTypeChangeAttributeOrderByNameActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $attributeNames;

    /**
     * @return null|array
     */
    public function getAttributeNames()
    {
        return $this->attributeNames;
    }

    /**
     * @param ?array $attributeNames
     * @return $this
     */
    public function withAttributeNames(?array $attributeNames)
    {
        $this->attributeNames = $attributeNames;

        return $this;
    }


    public function build(): ProductTypeChangeAttributeOrderByNameAction
    {
        return new ProductTypeChangeAttributeOrderByNameActionModel(
            $this->attributeNames
        );
    }

    public static function of(): ProductTypeChangeAttributeOrderByNameActionBuilder
    {
        return new self();
    }
}
