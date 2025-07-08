<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReference;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class LineItemRecurrenceInfoModel extends JsonObjectModel implements LineItemRecurrenceInfo
{
    /**
     *
     * @var ?RecurrencePolicyReference
     */
    protected $recurrencePolicy;

    /**
     *
     * @var ?string
     */
    protected $priceSelectionMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyReference $recurrencePolicy = null,
        ?string $priceSelectionMode = null
    ) {
        $this->recurrencePolicy = $recurrencePolicy;
        $this->priceSelectionMode = $priceSelectionMode;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a RecurrencePolicy.</p>
     *
     *
     * @return null|RecurrencePolicyReference
     */
    public function getRecurrencePolicy()
    {
        if (is_null($this->recurrencePolicy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICY);
            if (is_null($data)) {
                return null;
            }

            $this->recurrencePolicy = RecurrencePolicyReferenceModel::of($data);
        }

        return $this->recurrencePolicy;
    }

    /**
     * <p>Indicates how the price of a line item will be selected during order creation.</p>
     *
     *
     * @return null|string
     */
    public function getPriceSelectionMode()
    {
        if (is_null($this->priceSelectionMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_SELECTION_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceSelectionMode = (string) $data;
        }

        return $this->priceSelectionMode;
    }


    /**
     * @param ?RecurrencePolicyReference $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy): void
    {
        $this->recurrencePolicy = $recurrencePolicy;
    }

    /**
     * @param ?string $priceSelectionMode
     */
    public function setPriceSelectionMode(?string $priceSelectionMode): void
    {
        $this->priceSelectionMode = $priceSelectionMode;
    }
}
