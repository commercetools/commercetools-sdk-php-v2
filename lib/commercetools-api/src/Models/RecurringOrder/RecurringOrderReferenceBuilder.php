<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderReference>
 */
final class RecurringOrderReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|RecurringOrder|RecurringOrderBuilder
     */
    private $obj;

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Contains the representation of the expanded RecurringOrder.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for RecurringOrders.</p>
     *

     * @return null|RecurringOrder
     */
    public function getObj()
    {
        return $this->obj instanceof RecurringOrderBuilder ? $this->obj->build() : $this->obj;
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
     * @param ?RecurringOrder $obj
     * @return $this
     */
    public function withObj(?RecurringOrder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    /**
     * @deprecated use withObj() instead
     * @return $this
     */
    public function withObjBuilder(?RecurringOrderBuilder $obj)
    {
        $this->obj = $obj;

        return $this;
    }

    public function build(): RecurringOrderReference
    {
        return new RecurringOrderReferenceModel(
            $this->id,
            $this->obj instanceof RecurringOrderBuilder ? $this->obj->build() : $this->obj
        );
    }

    public static function of(): RecurringOrderReferenceBuilder
    {
        return new self();
    }
}
