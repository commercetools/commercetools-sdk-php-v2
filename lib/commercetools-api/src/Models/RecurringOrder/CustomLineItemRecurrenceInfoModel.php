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
final class CustomLineItemRecurrenceInfoModel extends JsonObjectModel implements CustomLineItemRecurrenceInfo
{
    /**
     *
     * @var ?RecurrencePolicyReference
     */
    protected $recurrencePolicy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyReference $recurrencePolicy = null
    ) {
        $this->recurrencePolicy = $recurrencePolicy;
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
     * @param ?RecurrencePolicyReference $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyReference $recurrencePolicy): void
    {
        $this->recurrencePolicy = $recurrencePolicy;
    }
}
