<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

final class OrderCustomerGroupSetMessagePayloadModel extends JsonObjectModel implements OrderCustomerGroupSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCustomerGroupSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    /**
     * @var ?CustomerGroupReference
     */
    protected $oldCustomerGroup;


    public function __construct(
        CustomerGroupReference $customerGroup = null,
        CustomerGroupReference $oldCustomerGroup = null
    ) {
        $this->customerGroup = $customerGroup;
        $this->oldCustomerGroup = $oldCustomerGroup;
        $this->type = static::DISCRIMINATOR_VALUE;
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
    public function getCustomerGroup()
    {
        if (is_null($this->customerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerGroupSetMessagePayload::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    /**
     * @return null|CustomerGroupReference
     */
    public function getOldCustomerGroup()
    {
        if (is_null($this->oldCustomerGroup)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderCustomerGroupSetMessagePayload::FIELD_OLD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->oldCustomerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->oldCustomerGroup;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function setOldCustomerGroup(?CustomerGroupReference $oldCustomerGroup): void
    {
        $this->oldCustomerGroup = $oldCustomerGroup;
    }
}
