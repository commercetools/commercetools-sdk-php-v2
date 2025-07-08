<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\RecurringOrder\RecurringOrder;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderCreatedMessagePayload>
 */
final class RecurringOrderCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|RecurringOrder|RecurringOrderBuilder
     */
    private $order;

    /**
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was created.</p>
     *

     * @return null|RecurringOrder
     */
    public function getOrder()
    {
        return $this->order instanceof RecurringOrderBuilder ? $this->order->build() : $this->order;
    }

    /**
     * @param ?RecurringOrder $order
     * @return $this
     */
    public function withOrder(?RecurringOrder $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @deprecated use withOrder() instead
     * @return $this
     */
    public function withOrderBuilder(?RecurringOrderBuilder $order)
    {
        $this->order = $order;

        return $this;
    }

    public function build(): RecurringOrderCreatedMessagePayload
    {
        return new RecurringOrderCreatedMessagePayloadModel(
            $this->order instanceof RecurringOrderBuilder ? $this->order->build() : $this->order
        );
    }

    public static function of(): RecurringOrderCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
