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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerCreatedMessagePayload>
 */
final class CustomerCreatedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|Customer|CustomerBuilder
     */
    private $customer;

    /**
     * @return null|Customer
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer;
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
     * @deprecated use withCustomer() instead
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
            $this->customer instanceof CustomerBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): CustomerCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
