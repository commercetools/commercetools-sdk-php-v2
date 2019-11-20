<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewSetCustomerAction>
 */
final class ReviewSetCustomerActionBuilder implements Builder
{
    /**
     * @var CustomerResourceIdentifier|?CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): ReviewSetCustomerAction
    {
        return new ReviewSetCustomerActionModel(
            ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): ReviewSetCustomerActionBuilder
    {
        return new self();
    }
}
