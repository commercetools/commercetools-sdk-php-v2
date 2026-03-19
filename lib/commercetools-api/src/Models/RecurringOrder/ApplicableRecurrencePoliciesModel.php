<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ApplicableRecurrencePoliciesModel extends JsonObjectModel implements ApplicableRecurrencePolicies
{
    public const DISCRIMINATOR_VALUE = 'ApplicableRecurrencePolicies';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?RecurrencePolicyReferenceCollection
     */
    protected $recurrencePolicies;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?RecurrencePolicyReferenceCollection $recurrencePolicies = null,
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
     *
     *
     * @return null|RecurrencePolicyReferenceCollection
     */
    public function getRecurrencePolicies()
    {
        if (is_null($this->recurrencePolicies)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RECURRENCE_POLICIES);
            if (is_null($data)) {
                return null;
            }
            $this->recurrencePolicies = RecurrencePolicyReferenceCollection::fromArray($data);
        }

        return $this->recurrencePolicies;
    }


    /**
     * @param ?RecurrencePolicyReferenceCollection $recurrencePolicies
     */
    public function setRecurrencePolicies(?RecurrencePolicyReferenceCollection $recurrencePolicies): void
    {
        $this->recurrencePolicies = $recurrencePolicies;
    }
}
