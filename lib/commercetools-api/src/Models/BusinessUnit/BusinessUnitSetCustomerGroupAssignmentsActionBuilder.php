<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitSetCustomerGroupAssignmentsAction>
 */
final class BusinessUnitSetCustomerGroupAssignmentsActionBuilder implements Builder
{
    /**

     * @var ?CustomerGroupAssignmentDraftCollection
     */
    private $customerGroupAssignments;

    /**
     * <p>Customer Groups to assign the Business Unit to.</p>
     *

     * @return null|CustomerGroupAssignmentDraftCollection
     */
    public function getCustomerGroupAssignments()
    {
        return $this->customerGroupAssignments;
    }

    /**
     * @param ?CustomerGroupAssignmentDraftCollection $customerGroupAssignments
     * @return $this
     */
    public function withCustomerGroupAssignments(?CustomerGroupAssignmentDraftCollection $customerGroupAssignments)
    {
        $this->customerGroupAssignments = $customerGroupAssignments;

        return $this;
    }


    public function build(): BusinessUnitSetCustomerGroupAssignmentsAction
    {
        return new BusinessUnitSetCustomerGroupAssignmentsActionModel(
            $this->customerGroupAssignments
        );
    }

    public static function of(): BusinessUnitSetCustomerGroupAssignmentsActionBuilder
    {
        return new self();
    }
}
