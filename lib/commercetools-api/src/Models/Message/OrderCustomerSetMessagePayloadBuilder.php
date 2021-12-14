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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderCustomerSetMessagePayload>
 */
final class OrderCustomerSetMessagePayloadBuilder implements Builder
{
    /**
     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**
     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $oldCustomer;

    /**
     * @var null|CustomerGroupReference|CustomerGroupReferenceBuilder
     */
    private $oldCustomerGroup;

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p><a href="/types#reference">Reference</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
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
     * <p><a href="/types#reference">Reference</a> to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>.</p>
     *
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        return $this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?CustomerGroupReference $customerGroup
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @param ?CustomerReference $oldCustomer
     * @return $this
     */
    public function withOldCustomer(?CustomerReference $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;

        return $this;
    }

    /**
     * @param ?CustomerGroupReference $oldCustomerGroup
     * @return $this
     */
    public function withOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomerGroup() instead
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @deprecated use withOldCustomer() instead
     * @return $this
     */
    public function withOldCustomerBuilder(?CustomerReferenceBuilder $oldCustomer)
    {
        $this->oldCustomer = $oldCustomer;

        return $this;
    }

    /**
     * @deprecated use withOldCustomerGroup() instead
     * @return $this
     */
    public function withOldCustomerGroupBuilder(?CustomerGroupReferenceBuilder $oldCustomerGroup)
    {
        $this->oldCustomerGroup = $oldCustomerGroup;

        return $this;
    }

    public function build(): OrderCustomerSetMessagePayload
    {
        return new OrderCustomerSetMessagePayloadModel(
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->customerGroup instanceof CustomerGroupReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup,
            $this->oldCustomer instanceof CustomerReferenceBuilder ? $this->oldCustomer->build() : $this->oldCustomer,
            $this->oldCustomerGroup instanceof CustomerGroupReferenceBuilder ? $this->oldCustomerGroup->build() : $this->oldCustomerGroup
        );
    }

    public static function of(): OrderCustomerSetMessagePayloadBuilder
    {
        return new self();
    }
}
