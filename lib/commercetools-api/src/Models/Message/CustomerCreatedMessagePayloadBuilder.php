<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Api\Models\Customer\CustomerBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerCreatedMessagePayload>
 */
final class CustomerCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var Customer|?CustomerBuilder
     */
    private $customer;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
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
    public function withType(?string $type)
    {
        $this->type = $type;

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

    public function build(): CustomerCreatedMessagePayload
    {
        return new CustomerCreatedMessagePayloadModel(
            $this->type,
            ($this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): CustomerCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
