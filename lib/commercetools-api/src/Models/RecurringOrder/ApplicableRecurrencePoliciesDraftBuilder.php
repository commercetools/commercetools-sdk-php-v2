<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApplicableRecurrencePoliciesDraft>
 */
final class ApplicableRecurrencePoliciesDraftBuilder implements Builder
{
    /**

     * @var ?RecurrencePolicyResourceIdentifierCollection
     */
    private $recurrencePolicies;

    /**
     * <p>Recurrence Policies for which the Cart Discount is valid.</p>
     * <p>If a Recurrence Policy does not exist, a <a href="ctp:api:type:ReferencedResourceNotFoundError">ReferencedResourceNotFound</a> error will be returned.</p>
     * <p>If fewer or more Recurrence Policies are provided, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error will be returned.</p>
     *

     * @return null|RecurrencePolicyResourceIdentifierCollection
     */
    public function getRecurrencePolicies()
    {
        return $this->recurrencePolicies;
    }

    /**
     * @param ?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies
     * @return $this
     */
    public function withRecurrencePolicies(?RecurrencePolicyResourceIdentifierCollection $recurrencePolicies)
    {
        $this->recurrencePolicies = $recurrencePolicies;

        return $this;
    }


    public function build(): ApplicableRecurrencePoliciesDraft
    {
        return new ApplicableRecurrencePoliciesDraftModel(
            $this->recurrencePolicies
        );
    }

    public static function of(): ApplicableRecurrencePoliciesDraftBuilder
    {
        return new self();
    }
}
