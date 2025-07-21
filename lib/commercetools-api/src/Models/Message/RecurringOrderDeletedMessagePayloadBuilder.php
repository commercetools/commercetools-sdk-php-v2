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
 * @implements Builder<RecurringOrderDeletedMessagePayload>
 */
final class RecurringOrderDeletedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|RecurringOrder|RecurringOrderBuilder
     */
    private $recurringOrder;

    /**
     * <p><a href="ctp:api:type:RecurringOrder">RecurringOrder</a> that was deleted.</p>
     *

     * @return null|RecurringOrder
     */
    public function getRecurringOrder()
    {
        return $this->recurringOrder instanceof RecurringOrderBuilder ? $this->recurringOrder->build() : $this->recurringOrder;
    }

    /**
     * @param ?RecurringOrder $recurringOrder
     * @return $this
     */
    public function withRecurringOrder(?RecurringOrder $recurringOrder)
    {
        $this->recurringOrder = $recurringOrder;

        return $this;
    }

    /**
     * @deprecated use withRecurringOrder() instead
     * @return $this
     */
    public function withRecurringOrderBuilder(?RecurringOrderBuilder $recurringOrder)
    {
        $this->recurringOrder = $recurringOrder;

        return $this;
    }

    public function build(): RecurringOrderDeletedMessagePayload
    {
        return new RecurringOrderDeletedMessagePayloadModel(
            $this->recurringOrder instanceof RecurringOrderBuilder ? $this->recurringOrder->build() : $this->recurringOrder
        );
    }

    public static function of(): RecurringOrderDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
