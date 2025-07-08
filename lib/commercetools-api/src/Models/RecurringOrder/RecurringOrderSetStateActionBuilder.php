<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderSetStateAction>
 */
final class RecurringOrderSetStateActionBuilder implements Builder
{
    /**

     * @var null|RecurringOrderStateDraft|RecurringOrderStateDraftBuilder
     */
    private $recurringOrderState;

    /**
     * <p>New state of the RecurringOrder.</p>
     *

     * @return null|RecurringOrderStateDraft
     */
    public function getRecurringOrderState()
    {
        return $this->recurringOrderState instanceof RecurringOrderStateDraftBuilder ? $this->recurringOrderState->build() : $this->recurringOrderState;
    }

    /**
     * @param ?RecurringOrderStateDraft $recurringOrderState
     * @return $this
     */
    public function withRecurringOrderState(?RecurringOrderStateDraft $recurringOrderState)
    {
        $this->recurringOrderState = $recurringOrderState;

        return $this;
    }

    /**
     * @deprecated use withRecurringOrderState() instead
     * @return $this
     */
    public function withRecurringOrderStateBuilder(?RecurringOrderStateDraftBuilder $recurringOrderState)
    {
        $this->recurringOrderState = $recurringOrderState;

        return $this;
    }

    public function build(): RecurringOrderSetStateAction
    {
        return new RecurringOrderSetStateActionModel(
            $this->recurringOrderState instanceof RecurringOrderStateDraftBuilder ? $this->recurringOrderState->build() : $this->recurringOrderState
        );
    }

    public static function of(): RecurringOrderSetStateActionBuilder
    {
        return new self();
    }
}
