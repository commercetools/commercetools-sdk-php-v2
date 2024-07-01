<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerAddCustomerGroupAssignmentAction>
 */
final class CustomerAddCustomerGroupAssignmentActionBuilder implements Builder
{
    /**

     * @var null|CustomerGroupAssignmentDraft|CustomerGroupAssignmentDraftBuilder
     */
    private $customerGroupAssignment;

    /**
     * <p>Customer Group to assign to the Customer.</p>
     *

     * @return null|CustomerGroupAssignmentDraft
     */
    public function getCustomerGroupAssignment()
    {
        return $this->customerGroupAssignment instanceof CustomerGroupAssignmentDraftBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment;
    }

    /**
     * @param ?CustomerGroupAssignmentDraft $customerGroupAssignment
     * @return $this
     */
    public function withCustomerGroupAssignment(?CustomerGroupAssignmentDraft $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroupAssignment() instead
     * @return $this
     */
    public function withCustomerGroupAssignmentBuilder(?CustomerGroupAssignmentDraftBuilder $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    public function build(): CustomerAddCustomerGroupAssignmentAction
    {
        return new CustomerAddCustomerGroupAssignmentActionModel(
            $this->customerGroupAssignment instanceof CustomerGroupAssignmentDraftBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment
        );
    }

    public static function of(): CustomerAddCustomerGroupAssignmentActionBuilder
    {
        return new self();
    }
}
