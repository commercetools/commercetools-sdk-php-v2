<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderReference>
 */
final class OrderReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|Order|OrderBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded Order. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Orders.</p>
     *

     * @return null|Order
     */
    public function getObj()
    {
        return $this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?Order $obj
     * @return $this
     */
    public function withObj(?Order $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?OrderBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): OrderReference
    {
        return new OrderReferenceModel(
            $this->id,
            $this->obj instanceof OrderBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): OrderReferenceBuilder
    {
        return new self();
    }
}
