<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountReference>
 */
final class CartDiscountReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|CartDiscount|CartDiscountBuilder
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
     * @return null|CartDiscount
     */
    public function getObj()
    {
        return $this->obj instanceof CartDiscountBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?CartDiscount $obj
     * @return $this
     */
    public function withObj(?CartDiscount $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?CartDiscountBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CartDiscountReference
    {
        return new CartDiscountReferenceModel(
            $this->id,
            $this->obj instanceof CartDiscountBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CartDiscountReferenceBuilder
    {
        return new self();
    }
}
