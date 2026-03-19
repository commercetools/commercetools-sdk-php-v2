<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupAssignmentsSetMessagePayload>
 */
final class CustomerGroupAssignmentsSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?CustomerGroupAssignmentCollection
     */
    private $customerGroupAssignments;

    /**

     * @var ?CustomerGroupAssignmentCollection
     */
    private $oldCustomerGroupAssignments;

    /**
     * <p>Customer Groups assigned to the Customer during the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getCustomerGroupAssignments()
    {
        return $this->customerGroupAssignments;
    }

    /**
     * <p>Customer Groups assigned to the Customer before the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getOldCustomerGroupAssignments()
    {
        return $this->oldCustomerGroupAssignments;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $customerGroupAssignments
     * @return $this
     */
    public function withCustomerGroupAssignments(?CustomerGroupAssignmentCollection $customerGroupAssignments)
    {
        $this->customerGroupAssignments = $customerGroupAssignments;

        return $this;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments
     * @return $this
     */
    public function withOldCustomerGroupAssignments(?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments)
    {
        $this->oldCustomerGroupAssignments = $oldCustomerGroupAssignments;

        return $this;
    }


    public function build(): CustomerGroupAssignmentsSetMessagePayload
    {
        return new CustomerGroupAssignmentsSetMessagePayloadModel(
            $this->customerGroupAssignments,
            $this->oldCustomerGroupAssignments
        );
    }

    public static function of(): CustomerGroupAssignmentsSetMessagePayloadBuilder
    {
        return new self();
    }
}
