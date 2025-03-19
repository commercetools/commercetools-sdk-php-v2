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
final class CustomerAddCustomerGroupAssignmentActionModel extends JsonObjectModel implements CustomerAddCustomerGroupAssignmentAction
{
    public const DISCRIMINATOR_VALUE = 'addCustomerGroupAssignment';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CustomerGroupAssignmentDraft
     */
    protected $customerGroupAssignment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerGroupAssignmentDraft $customerGroupAssignment = null,
        ?string $action = null
    ) {
        $this->customerGroupAssignment = $customerGroupAssignment;
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
     * <p>Customer Group to assign the Customer to.</p>
     *
     *
     * @return null|CustomerGroupAssignmentDraft
     */
    public function getCustomerGroupAssignment()
    {
        if (is_null($this->customerGroupAssignment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER_GROUP_ASSIGNMENT);
            if (is_null($data)) {
                return null;
            }

            $this->customerGroupAssignment = CustomerGroupAssignmentDraftModel::of($data);
        }

        return $this->customerGroupAssignment;
    }


    /**
     * @param ?CustomerGroupAssignmentDraft $customerGroupAssignment
     */
    public function setCustomerGroupAssignment(?CustomerGroupAssignmentDraft $customerGroupAssignment): void
    {
        $this->customerGroupAssignment = $customerGroupAssignment;
    }
}
