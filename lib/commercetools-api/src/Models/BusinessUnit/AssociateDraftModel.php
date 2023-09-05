<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateDraftModel extends JsonObjectModel implements AssociateDraft
{
    /**
     *
     * @var ?AssociateRoleAssignmentDraftCollection
     */
    protected $associateRoleAssignments;

    /**
     *
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments = null,
        ?CustomerResourceIdentifier $customer = null
    ) {
        $this->associateRoleAssignments = $associateRoleAssignments;
        $this->customer = $customer;
    }

    /**
     * <p>Roles assigned to the Associate within a Business Unit.</p>
     *
     *
     * @return null|AssociateRoleAssignmentDraftCollection
     */
    public function getAssociateRoleAssignments()
    {
        if (is_null($this->associateRoleAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->associateRoleAssignments = AssociateRoleAssignmentDraftCollection::fromArray($data);
        }

        return $this->associateRoleAssignments;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> to be part of the Business Unit.</p>
     *
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }


    /**
     * @param ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentDraftCollection $associateRoleAssignments): void
    {
        $this->associateRoleAssignments = $associateRoleAssignments;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
}
