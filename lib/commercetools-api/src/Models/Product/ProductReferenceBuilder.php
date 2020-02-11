<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;

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
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|Product
     */
    public function getObj()
    {
        return $this->obj instanceof ProductBuilder ? $this->obj->build() : $this->obj;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObj(?Product $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
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
