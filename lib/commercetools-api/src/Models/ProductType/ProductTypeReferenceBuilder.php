<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeReference>
 */
final class ProductTypeReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|ProductType|ProductTypeBuilder
     */
    private $obj;

    /**
     * <p>Unique ID of the referenced resource.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|ProductType
     */
    public function getObj()
    {
        return $this->obj instanceof ProductTypeBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?ProductType $obj
     * @return $this
     */
    public function withObj(?ProductType $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ProductTypeBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductTypeReference
    {
        return new ProductTypeReferenceModel(
            $this->id,
            $this->obj instanceof ProductTypeBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductTypeReferenceBuilder
    {
        return new self();
    }
}
