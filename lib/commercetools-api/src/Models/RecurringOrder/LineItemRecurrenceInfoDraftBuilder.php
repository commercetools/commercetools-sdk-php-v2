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
 * @implements Builder<LineItemRecurrenceInfoDraft>
 */
final class LineItemRecurrenceInfoDraftBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyResourceIdentifier|RecurrencePolicyResourceIdentifierBuilder
     */
    private $recurrencePolicy;

    /**

     * @var ?string
     */
    private $priceSelectionMode;

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
     * <p>Determines how the price of a line item will be selected during order creation.</p>
     *

     * @return null|string
     */
    public function getPriceSelectionMode()
    {
        return $this->priceSelectionMode;
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
     * @param ?string $priceSelectionMode
     * @return $this
     */
    public function withPriceSelectionMode(?string $priceSelectionMode)
    {
        $this->priceSelectionMode = $priceSelectionMode;

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

    public function build(): LineItemRecurrenceInfoDraft
    {
        return new LineItemRecurrenceInfoDraftModel(
            $this->recurrencePolicy instanceof RecurrencePolicyResourceIdentifierBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy,
            $this->priceSelectionMode
        );
    }

    public static function of(): LineItemRecurrenceInfoDraftBuilder
    {
        return new self();
    }
}
