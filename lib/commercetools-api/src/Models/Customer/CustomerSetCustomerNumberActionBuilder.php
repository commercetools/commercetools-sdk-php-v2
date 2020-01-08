<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetCustomerNumberAction>
 */
final class CustomerSetCustomerNumberActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customerNumber;

    /**
     * <p>It should be <strong>unique</strong> across a project.
     * Once it's set, it cannot be changed.</p>.
     *
     * @return null|string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @return $this
     */
    public function withCustomerNumber(?string $customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    public function build(): CustomerSetCustomerNumberAction
    {
        return new CustomerSetCustomerNumberActionModel(
            $this->customerNumber
        );
    }

    public static function of(): CustomerSetCustomerNumberActionBuilder
    {
        return new self();
    }
}
