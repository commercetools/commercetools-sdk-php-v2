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
 * @implements Builder<CustomLineItemRecurrenceInfoDraft>
 */
final class CustomLineItemRecurrenceInfoDraftBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyResourceIdentifier|RecurrencePolicyResourceIdentifierBuilder
     */
    private $recurrencePolicy;

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a RecurrencePolicy.</p>
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

    public function build(): CustomLineItemRecurrenceInfoDraft
    {
        return new CustomLineItemRecurrenceInfoDraftModel(
            $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy
        );
    }

    public static function of(): CustomLineItemRecurrenceInfoDraftBuilder
    {
        return new self();
    }
}
