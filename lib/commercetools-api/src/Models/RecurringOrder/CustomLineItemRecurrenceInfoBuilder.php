<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReference;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomLineItemRecurrenceInfo>
 */
final class CustomLineItemRecurrenceInfoBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyReference|RecurrencePolicyReferenceBuilder
     */
    private $recurrencePolicy;

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a RecurrencePolicy.</p>
     *

     * @return null|RecurrencePolicyReference
     */
    public function getRecurrencePolicy()
    {
        return $this->recurrencePolicy instanceof RecurrencePolicyReferenceBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy;
    }

    /**
     * @param ?RecurrencePolicyReference $recurrencePolicy
     * @return $this
     */
    public function withRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    /**
     * @deprecated use withRecurrencePolicy() instead
     * @return $this
     */
    public function withRecurrencePolicyBuilder(?RecurrencePolicyReferenceBuilder $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    public function build(): CustomLineItemRecurrenceInfo
    {
        return new CustomLineItemRecurrenceInfoModel(
            $this->recurrencePolicy instanceof RecurrencePolicyReferenceBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy
        );
    }

    public static function of(): CustomLineItemRecurrenceInfoBuilder
    {
        return new self();
    }
}
