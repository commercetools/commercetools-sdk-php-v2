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
 * @implements Builder<LineItemRecurrenceInfo>
 */
final class LineItemRecurrenceInfoBuilder implements Builder
{
    /**

     * @var null|RecurrencePolicyReference|RecurrencePolicyReferenceBuilder
     */
    private $recurrencePolicy;

    /**

     * @var ?string
     */
    private $priceSelectionMode;

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
     * <p>Indicates how the price of a line item will be selected during order creation.</p>
     *

     * @return null|string
     */
    public function getPriceSelectionMode()
    {
        return $this->priceSelectionMode;
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
    public function withRecurrencePolicyBuilder(?RecurrencePolicyReferenceBuilder $recurrencePolicy)
    {
        $this->recurrencePolicy = $recurrencePolicy;

        return $this;
    }

    public function build(): LineItemRecurrenceInfo
    {
        return new LineItemRecurrenceInfoModel(
            $this->recurrencePolicy instanceof RecurrencePolicyReferenceBuilder ? $this->recurrencePolicy->build() : $this->recurrencePolicy,
            $this->priceSelectionMode
        );
    }

    public static function of(): LineItemRecurrenceInfoBuilder
    {
        return new self();
    }
}
