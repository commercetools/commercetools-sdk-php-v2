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
final class CustomerGroupAssignmentsSetMessagePayloadModel extends JsonObjectModel implements CustomerGroupAssignmentsSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CustomerGroupAssignmentsSet';
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupAssignmentCollection $customerGroupAssignments = null,
        ?string $type = null
    ) {
        $this->customerGroupAssignments = $customerGroupAssignments;
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
     * <p>List of <a href="ctp:api:type:CustomerGroupAssignment">CustomerGroupAssignments</a> that were set during the <a href="ctp:api:type:CustomerSetCustomerGroupAssignmentsAction">Set CustomerGroupAssignments</a> update action.</p>
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
     * @param ?CustomerGroupAssignmentCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentCollection $customerGroupAssignments): void
    {
        $this->customerGroupAssignments = $customerGroupAssignments;
    }
}
