<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupAssignmentRemovedMessagePayload>
 */
final class CustomerGroupAssignmentRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroupAssignment;

    /**
     * <p><a href="ctp:api:type:CustomerGroupAssignment">CustomerGroupAssignment</a> that was removed during the <a href="ctp:api:type:CustomerRemoveCustomerGroupAssignmentAction">Remove CustomerGroupAssignment</a> update action.</p>
     *

     * @return null|CustomerGroupReference
     */
    public function getCustomerGroupAssignment()
    {
        return $this->customerGroupAssignment instanceof CustomerGroupReferenceBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment;
    }

    /**
     * @param ?CustomerGroupReference $customerGroupAssignment
     * @return $this
     */
    public function withCustomerGroupAssignment(?CustomerGroupReference $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroupAssignment() instead
     * @return $this
     */
    public function withCustomerGroupAssignmentBuilder(?CustomerGroupReferenceBuilder $customerGroupAssignment)
    {
        $this->customerGroupAssignment = $customerGroupAssignment;

        return $this;
    }

    public function build(): CustomerGroupAssignmentRemovedMessagePayload
    {
        return new CustomerGroupAssignmentRemovedMessagePayloadModel(
            $this->customerGroupAssignment instanceof CustomerGroupReferenceBuilder ? $this->customerGroupAssignment->build() : $this->customerGroupAssignment
        );
    }

    public static function of(): CustomerGroupAssignmentRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
