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

/**
 * @internal
 */
final class CustomerGroupAssignmentRemovedMessagePayloadModel extends JsonObjectModel implements CustomerGroupAssignmentRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerGroupAssignmentRemoved';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerGroupReference
     */
    protected $customerGroupAssignment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupReference $customerGroupAssignment = null,
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
     * <p><a href="ctp:api:type:CustomerGroupAssignment">CustomerGroupAssignment</a> that was removed during the <a href="ctp:api:type:CustomerRemoveCustomerGroupAssignmentAction">Remove CustomerGroupAssignment</a> update action.</p>
     *
     *
     * @return null|CustomerGroupReference
     */
    public function getCustomerGroupAssignment()
    {
        if (is_null($this->customerGroupAssignment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP_ASSIGNMENT);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroupAssignment = CustomerGroupReferenceModel::of($data);
        }

        return $this->customerGroupAssignment;
    }


    /**
     * @param ?CustomerGroupReference $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupReference $customerGroupAssignment): void
    {
        $this->customerGroupAssignment = $customerGroupAssignment;
    }
}
