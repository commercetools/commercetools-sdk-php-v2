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
 * @implements Builder<CustomerSignInResult>
 */
final class CustomerSignInResultBuilder implements Builder
{
    /**
     * @var null|Customer|CustomerBuilder
     */
    private $customer;

    /**
     * @var ?JsonObject
     */
    private $cart;

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>A cart that is associated to the customer.
     * Empty if the customer does not have a cart yet.</p>
     *
     * @return null|JsonObject
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param ?Customer $customer
     * @return $this
     */
    public function withCustomer(?Customer $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?JsonObject $cart
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
    public function withCustomerBuilder(?CustomerBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): CustomerSignInResult
    {
        return new CustomerSignInResultModel(
            $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer,
            $this->cart
        );
    }

    public static function of(): CustomerSignInResultBuilder
    {
        return new self();
    }
}
