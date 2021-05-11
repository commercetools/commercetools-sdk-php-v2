<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartBuilder;
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
     * @var null|Cart|CartBuilder
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
     * @return null|Cart
     */
    public function getCart()
    {
        return $this->cart instanceof CartBuilder ? $this->cart->build() : $this->cart;
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
     * @param ?Cart $cart
     * @return $this
     */
    public function withCart(?Cart $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    public function build(): CustomerSignInResult
    {
        return new CustomerSignInResultModel(
            $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer,
            $this->cart instanceof CartBuilder ? $this->cart->build() : $this->cart
        );
    }

    public static function of(): CustomerSignInResultBuilder
    {
        return new self();
    }
}
