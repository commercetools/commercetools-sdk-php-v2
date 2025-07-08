<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderSetScheduleAction>
 */
final class RecurringOrderSetScheduleActionBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyResourceIdentifier|RecurrencePolicyResourceIdentifierBuilder
     */
    private $recurrencePolicy;

    /**
     * <p>Value to set.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy()
    {
        return $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy;
    }

    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     * @return $this
     */
    public function withRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    /**
     * @deprecated use withRecurrencePolicy() instead
     * @return $this
     */
    public function withRecurrencePolicyBuilder(?RecurrencePolicyResourceIdentifierBuilder $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    public function build(): RecurringOrderSetScheduleAction
    {
        return new RecurringOrderSetScheduleActionModel(
            $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy
        );
    }

    public static function of(): RecurringOrderSetScheduleActionBuilder
    {
        return new self();
    }
}
