<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<CustomerSignInResult>
 */
final class CustomerSignInResultBuilder implements Builder
{
    /**
     * @var ?JsonObject
     */
    private $cart;

    /**
     * @var Customer|?CustomerBuilder
     */
    private $customer;

    /**
     * @return null|JsonObject
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return $this
     */
    public function withCart(?JsonObject $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): CustomerSignInResult
    {
        return new CustomerSignInResultModel(
            $this->cart,
            ($this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): CustomerSignInResultBuilder
    {
        return new self();
    }
}
