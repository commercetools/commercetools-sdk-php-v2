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
 * @implements Builder<ProductTypeChangeAttributeOrderAction>
 */
final class ProductTypeChangeAttributeOrderActionBuilder implements Builder
{
    /**
     * @var ?AttributeDefinitionCollection
     */
    private $attributes;

    /**
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param ?AttributeDefinitionCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeDefinitionCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }


    public function build(): ProductTypeChangeAttributeOrderAction
    {
        return new ProductTypeChangeAttributeOrderActionModel(
            $this->attributes
        );
    }

    public static function of(): ProductTypeChangeAttributeOrderActionBuilder
    {
        return new self();
    }
}
