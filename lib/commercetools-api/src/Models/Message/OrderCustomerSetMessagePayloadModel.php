<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderCustomerSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderCustomerSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CustomerGroupReference
     */
    protected $oldCustomerGroup;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?CustomerReference
     */
    protected $oldCustomer;

    /**
     * @var ?CustomerReference
     */
    protected $customer;

    public function __construct(
        string $type = null,
        CustomerGroupReference $oldCustomerGroup = null,
        CustomerGroupReference $customerGroup = null,
        CustomerReference $oldCustomer = null,
        CustomerReference $customer = null
    ) {
        $this->type = $type;
        $this->oldCustomerGroup = $oldCustomerGroup;
        $this->customerGroup = $customerGroup;
        $this->oldCustomer = $oldCustomer;
        $this->customer = $customer;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        if (is_null($this->oldCustomerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_OLD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->oldCustomerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->oldCustomerGroup;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|CustomerReference
     */
    public function getOldCustomer()
    {
        if (is_null($this->oldCustomer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_OLD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->oldCustomer = CustomerReferenceModel::of($data);
        }

        return $this->oldCustomer;
    }

    /**
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerSetMessagePayload::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setOldCustomer(?CustomerReference $oldCustomer): void
    {
        $this->oldCustomer = $oldCustomer;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
}
