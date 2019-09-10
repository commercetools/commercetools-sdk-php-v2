<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderCustomerSetMessagePayload>
 */
final class OrderCustomerSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $oldCustomerGroup;

    /**
     * @var CustomerGroupReference|?CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
     */
    private $oldCustomer;

    /**
     * @var CustomerReference|?CustomerReferenceBuilder
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
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        return $this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * @return null|CustomerReference
     */
    public function getOldCustomer()
    {
        return $this->oldCustomer instanceof CustomerReferenceBuilder ? $this->oldCustomer->build() : $this->oldCustomer;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
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
    public function withOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldCustomer(?CustomerReference $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldCustomerGroupBuilder(?CustomerGroupReferenceBuilder $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOldCustomerBuilder(?CustomerReferenceBuilder $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): OrderCustomerSetMessagePayload
    {
        return new OrderCustomerSetMessagePayloadModel(
            $this->type,
            ($this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup),
            ($this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->oldCustomer instanceof CustomerReferenceBuilder ? $this->oldCustomer->build() : $this->oldCustomer),
            ($this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer)
        );
    }

    public static function of(): OrderCustomerSetMessagePayloadBuilder
    {
        return new self();
    }
}
