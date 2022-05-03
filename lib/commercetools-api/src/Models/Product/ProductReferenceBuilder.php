<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductReference>
 */
final class ProductReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Product|ProductBuilder
     */
    private $obj;

    /**
     * <p>Platform-generated unique identifier of the referenced <a href="ctp:api:type:Product">Product</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Product. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Products.</p>
     *
     * @return null|Product
     */
    public function getObj()
    {
        return $this->obj instanceof ProductBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?Product $obj
     * @return $this
     */
    public function withObj(?Product $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ProductBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductReference
    {
        return new ProductReferenceModel(
            $this->id,
            $this->obj instanceof ProductBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductReferenceBuilder
    {
        return new self();
    }
}
