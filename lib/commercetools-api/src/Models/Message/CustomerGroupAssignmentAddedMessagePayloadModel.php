<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignment;
use Commercetools\Api\Models\Customer\CustomerGroupAssignmentModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerGroupAssignmentAddedMessagePayloadModel extends JsonObjectModel implements CustomerGroupAssignmentAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerGroupAssignmentAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerGroupAssignment
     */
    protected $customerGroupAssignment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupAssignment $customerGroupAssignment = null,
        ?string $type = null
    ) {
        $this->customerGroupAssignment = $customerGroupAssignment;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Customer Group assigned to the Customer during the <a href="ctp:api:type:CustomerAddCustomerGroupAssignmentAction">Add CustomerGroupAssignment</a> update action.</p>
     *
     *
     * @return null|CustomerGroupAssignment
     */
    public function getCustomerGroupAssignment()
    {
        if (is_null($this->customerGroupAssignment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP_ASSIGNMENT);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroupAssignment = CustomerGroupAssignmentModel::of($data);
        }

        return $this->customerGroupAssignment;
    }


    /**
     * @param ?CustomerGroupAssignment $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignment $customerGroupAssignment): void
    {
        $this->customerGroupAssignment = $customerGroupAssignment;
    }
}
