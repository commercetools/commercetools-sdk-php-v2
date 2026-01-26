<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurrencePolicy\RecurrencePolicyReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ApplicableRecurrencePolicies>
 */
final class ApplicableRecurrencePoliciesBuilder implements Builder
{
    /**

     * @var ?RecurrencePolicyReferenceCollection
     */
    private $recurrencePolicies;

    /**
     * <p>Recurrence Policies for which the Cart Discount is valid.</p>
     *

     * @return null|RecurrencePolicyReferenceCollection
     */
    public function getRecurrencePolicies()
    {
        return $this->recurrencePolicies;
    }

    /**
     * @param ?RecurrencePolicyReferenceCollection $recurrencePolicies
     * @return $this
     */
    public function withRecurrencePolicies(?RecurrencePolicyReferenceCollection $recurrencePolicies)
    {
        $this->recurrencePolicies = $recurrencePolicies;

        return $this;
    }


    public function build(): ApplicableRecurrencePolicies
    {
        return new ApplicableRecurrencePoliciesModel(
            $this->recurrencePolicies
        );
    }

    public static function of(): ApplicableRecurrencePoliciesBuilder
    {
        return new self();
    }
}
