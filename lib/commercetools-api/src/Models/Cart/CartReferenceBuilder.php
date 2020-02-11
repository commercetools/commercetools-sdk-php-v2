<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartReference>
 */
final class CartReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|Cart|CartBuilder
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
     * @return null|Cart
     */
    public function getObj()
    {
        return $this->obj instanceof CartBuilder ? $this->obj->build() : $this->obj;
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
    public function withObj(?Cart $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @return $this
     */
    public function withObjBuilder(?CartBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): CartReference
    {
        return new CartReferenceModel(
            $this->id,
            $this->obj instanceof CartBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): CartReferenceBuilder
    {
        return new self();
    }
}
