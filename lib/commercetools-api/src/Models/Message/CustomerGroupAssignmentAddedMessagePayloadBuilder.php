<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignment;
use Commercetools\Api\Models\Customer\CustomerGroupAssignmentBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupAssignmentAddedMessagePayload>
 */
final class CustomerGroupAssignmentAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerGroupAssignment|CustomerGroupAssignmentBuilder
     */
    private $customerGroupAssignment;

    /**
     * <p>Customer Group assigned to the Customer during the <a href="ctp:api:type:CustomerAddCustomerGroupAssignmentAction">Add CustomerGroupAssignment</a> update action.</p>
     *

     * @return null|CustomerGroupAssignment
     */
    public function getCustomerGroupAssignment()
    {
        return $this->customerGroupAssignment instanceof CustomerGroupAssignmentBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment;
    }

    /**
     * @param ?CustomerGroupAssignment $customerGroupAssignment
     * @return $this
     */
    public function withCustomerGroupAssignment(?CustomerGroupAssignment $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroupAssignment() instead
     * @return $this
     */
    public function withCustomerGroupAssignmentBuilder(?CustomerGroupAssignmentBuilder $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    public function build(): CustomerGroupAssignmentAddedMessagePayload
    {
        return new CustomerGroupAssignmentAddedMessagePayloadModel(
            $this->customerGroupAssignment instanceof CustomerGroupAssignmentBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment
        );
    }

    public static function of(): CustomerGroupAssignmentAddedMessagePayloadBuilder
    {
        return new self();
    }
}
