<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitRemoveCustomerGroupAssignmentAction>
 */
final class BusinessUnitRemoveCustomerGroupAssignmentActionBuilder implements Builder
{
    /**

     * @var null|CustomerGroupResourceIdentifier|CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**
     * <p>Customer Group to unassign the Business Unit from.</p>
     *

     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @param ?CustomerGroupResourceIdentifier $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    public function build(): BusinessUnitRemoveCustomerGroupAssignmentAction
    {
        return new BusinessUnitRemoveCustomerGroupAssignmentActionModel(
            $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup
        );
    }

    public static function of(): BusinessUnitRemoveCustomerGroupAssignmentActionBuilder
    {
        return new self();
    }
}
