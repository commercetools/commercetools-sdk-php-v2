<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApplicableRecurrencePoliciesDraftModel extends JsonObjectModel implements ApplicableRecurrencePoliciesDraft
{
    public const DISCRIMINATOR_VALUE = 'ApplicableRecurrencePolicies';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RecurrencePolicyResourceIdentifierCollection
     */
    protected $recurrencePolicies;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies = null,
        ?string $type = null
    ) {
        $this->recurrencePolicies = $recurrencePolicies;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Recurrence Policies for which the Cart Discount is valid.</p>
     * <p>If a Recurrence Policy does not exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error will be returned.</p>
     * <p>If fewer or more Recurrence Policies are provided, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error will be returned.</p>
     *
     *
     * @return null|RecurrencePolicyResourceIdentifierCollection
     */
    public function getRecurrencePolicies()
    {
        if (is_null($this->recurrencePolicies)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICIES);
            if (is_null($data)) {
                return null;
            }
            $this->recurrencePolicies = RecurrencePolicyResourceIdentifierCollection::fromArray($data);
        }

        return $this->recurrencePolicies;
    }


    /**
     * @param ?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies
     */
    public function setRecurrencePolicies(?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies): void
    {
        $this->recurrencePolicies = $recurrencePolicies;
    }
}
