<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifier;
use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomLineItemRecurrenceInfoDraftModel extends JsonObjectModel implements CustomLineItemRecurrenceInfoDraft
{
    /**
     *
     * @var ?RecurrencePolicyResourceIdentifier
     */
    protected $recurrencePolicy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyResourceIdentifier $recurrencePolicy = null
    ) {
        $this->recurrencePolicy = $recurrencePolicy;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a RecurrencePolicy.</p>
     *
     *
     * @return null|RecurrencePolicyResourceIdentifier
     */
    public function getRecurrencePolicy()
    {
        if (is_null($this->recurrencePolicy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICY);
            if (is_null($data)) {
                return null;
            }

            $this->recurrencePolicy = RecurrencePolicyResourceIdentifierModel::of($data);
        }

        return $this->recurrencePolicy;
    }


    /**
     * @param ?RecurrencePolicyResourceIdentifier $recurrencePolicy
     */
    public function setRecurrencePolicy(?RecurrencePolicyResourceIdentifier $recurrencePolicy): void
    {
        $this->recurrencePolicy = $recurrencePolicy;
    }
}
