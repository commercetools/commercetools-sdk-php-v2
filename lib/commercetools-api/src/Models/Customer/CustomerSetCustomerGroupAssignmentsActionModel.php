<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerSetCustomerGroupAssignmentsActionModel extends JsonObjectModel implements CustomerSetCustomerGroupAssignmentsAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomerGroupAssignments';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CustomerGroupAssignmentDraftCollection
     */
    protected $customerGroupAssignments;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupAssignmentDraftCollection $customerGroupAssignments = null,
        ?string $action = null
    ) {
        $this->customerGroupAssignments = $customerGroupAssignments;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Customer Groups to assign to the Customer.</p>
     *
     *
     * @return null|CustomerGroupAssignmentDraftCollection
     */
    public function getCustomerGroupAssignments()
    {
        if (is_null($this->customerGroupAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->customerGroupAssignments = CustomerGroupAssignmentDraftCollection::fromArray($data);
        }

        return $this->customerGroupAssignments;
    }


    /**
     * @param ?CustomerGroupAssignmentDraftCollection $customerGroupAssignments
     */
    public function setCustomerGroupAssignments(?CustomerGroupAssignmentDraftCollection $customerGroupAssignments): void
    {
        $this->customerGroupAssignments = $customerGroupAssignments;
    }
}
