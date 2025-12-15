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
 * @implements Builder<BusinessUnitCustomerGroupAssignmentRemovedMessagePayload>
 */
final class BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerGroupAssignment|CustomerGroupAssignmentBuilder
     */
    private $customerGroupAssignment;

    /**
     * <p>Customer Group unassigned from the Business Unit during the <a href="ctp:api:type:BusinessUnitRemoveCustomerGroupAssignmentAction">Remove CustomerGroupAssignment</a> update action.</p>
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

    public function build(): BusinessUnitCustomerGroupAssignmentRemovedMessagePayload
    {
        return new BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadModel(
            $this->customerGroupAssignment instanceof CustomerGroupAssignmentBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment
        );
    }

    public static function of(): BusinessUnitCustomerGroupAssignmentRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
