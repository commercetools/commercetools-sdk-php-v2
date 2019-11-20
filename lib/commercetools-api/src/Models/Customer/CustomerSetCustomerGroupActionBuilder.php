<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifier;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetCustomerGroupAction>
 */
final class CustomerSetCustomerGroupActionBuilder implements Builder
{
    /**
     * @var CustomerGroupResourceIdentifier|?CustomerGroupResourceIdentifierBuilder
     */
    private $customerGroup;

    /**
     * @return null|CustomerGroupResourceIdentifier
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupResourceIdentifier $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupResourceIdentifierBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    public function build(): CustomerSetCustomerGroupAction
    {
        return new CustomerSetCustomerGroupActionModel(
            ($this->customerGroup instanceof CustomerGroupResourceIdentifierBuilder ? $this->customerGroup->build() : $this->customerGroup)
        );
    }

    public static function of(): CustomerSetCustomerGroupActionBuilder
    {
        return new self();
    }
}
