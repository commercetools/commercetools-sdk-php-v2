<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CustomerGroupSetMessagePayloadModel extends JsonObjectModel implements CustomerGroupSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerGroupSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?CustomerGroupReference
     */
    protected $customerGroup;

    public function __construct(
        string $type = null,
        CustomerGroupReference $customerGroup = null
    ) {
        $this->type = $type;
        $this->customerGroup = $customerGroup;
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
            $data = $this->raw(CustomerGroupSetMessagePayload::FIELD_CUSTOMER_GROUP);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroup = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroup;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }
}
