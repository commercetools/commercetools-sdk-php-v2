<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CustomerKeyReference;
use Commercetools\Import\Models\Common\CustomerKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class AssociateDraftModel extends JsonObjectModel implements AssociateDraft
{
    /**
     *
     * @var ?CustomerKeyReference
     */
    protected $customer;

    /**
     *
     * @var ?AssociateRoleAssignmentDraftCollection
     */
    protected $associateRoleAssignments;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerKeyReference $customer = null,
        ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments = null
    ) {
        $this->customer = $customer;
        $this->associateRoleAssignments = $associateRoleAssignments;
    }

    /**
     * <p>The Customer to be part of the Business Unit.</p>
     *
     *
     * @return null|CustomerKeyReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerKeyReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>The roles to assign to the Associate.</p>
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
     * @param ?CustomerKeyReference $customer
     */
    public function setCustomer(?CustomerKeyReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentDraftCollection $associateRoleAssignments): void
    {
        $this->associateRoleAssignments = $associateRoleAssignments;
    }
}
