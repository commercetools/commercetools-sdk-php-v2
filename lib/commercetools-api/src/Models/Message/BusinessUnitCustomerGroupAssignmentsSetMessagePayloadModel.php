<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerGroupAssignmentCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitCustomerGroupAssignmentsSetMessagePayloadModel extends JsonObjectModel implements BusinessUnitCustomerGroupAssignmentsSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitCustomerGroupAssignmentsSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $customerGroupAssignments;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $oldCustomerGroupAssignments;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupAssignmentCollection $customerGroupAssignments = null,
        ?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments = null,
        ?string $type = null
    ) {
        $this->customerGroupAssignments = $customerGroupAssignments;
        $this->oldCustomerGroupAssignments = $oldCustomerGroupAssignments;
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
     * <p>Customer Groups assigned to the Business Unit during the <a href="ctp:api:type:BusinessUnitSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getCustomerGroupAssignments()
    {
        if (is_null($this->customerGroupAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->customerGroupAssignments = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->customerGroupAssignments;
    }

    /**
     * <p>Customer Groups assigned to the Business Unit before the <a href="ctp:api:type:BusinessUnitSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getOldCustomerGroupAssignments()
    {
        if (is_null($this->oldCustomerGroupAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_OLD_CUSTOMER_GROUP_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->oldCustomerGroupAssignments = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->oldCustomerGroupAssignments;
    }


    /**
     * @param ?CustomerGroupAssignmentCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentCollection $customerGroupAssignments): void
    {
        $this->customerGroupAssignments = $customerGroupAssignments;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments
     */
    public function setOldCustomerGroupAssignments(?CustomerGroupAssignmentCollection $oldCustomerGroupAssignments): void
    {
        $this->oldCustomerGroupAssignments = $oldCustomerGroupAssignments;
    }
}
