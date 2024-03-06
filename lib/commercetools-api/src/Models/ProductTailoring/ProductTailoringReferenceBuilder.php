<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringReference>
 */
final class ProductTailoringReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|ProductTailoring|ProductTailoringBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:ProductTailoring">ProductTailoring</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded ProductTailoring. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for ProductTailoring.</p>
     *

     * @return null|ProductTailoring
     */
    public function getObj()
    {
        return $this->obj instanceof ProductTailoringBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?ProductTailoring $obj
     * @return $this
     */
    public function withObj(?ProductTailoring $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?ProductTailoringBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): ProductTailoringReference
    {
        return new ProductTailoringReferenceModel(
            $this->id,
            $this->obj instanceof ProductTailoringBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): ProductTailoringReferenceBuilder
    {
        return new self();
    }
}
