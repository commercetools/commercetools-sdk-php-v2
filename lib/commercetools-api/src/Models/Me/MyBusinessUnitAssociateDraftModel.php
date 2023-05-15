<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateRoleAssignmentDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyBusinessUnitAssociateDraftModel extends JsonObjectModel implements MyBusinessUnitAssociateDraft
{
    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?MyCustomerDraft
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
        ?int $version = null,
        ?MyCustomerDraft $customer = null,
        ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments = null
    ) {
        $this->version = $version;
        $this->customer = $customer;
        $this->associateRoleAssignments = $associateRoleAssignments;
    }

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied. If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> to create and assign to the Business Unit.</p>
     *
     *
     * @return null|MyCustomerDraft
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = MyCustomerDraftModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Roles assigned to the new Associate within a Business Unit.</p>
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
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?MyCustomerDraft $customer
     */
    public function setCustomer(?MyCustomerDraft $customer): void
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
