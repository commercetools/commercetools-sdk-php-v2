<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleCollection;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitAssociateResponseModel extends JsonObjectModel implements BusinessUnitAssociateResponse
{
    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @var ?AssociateRoleCollection
     */
    protected $associateRoles;

    /**
     *
     * @var ?AssociateRoleCollection
     */
    protected $inheritedAssociateRoles;

    /**
     *
     * @var ?array
     */
    protected $permissions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomerReference $customer = null,
        ?AssociateRoleCollection $associateRoles = null,
        ?AssociateRoleCollection $inheritedAssociateRoles = null,
        ?array $permissions = null
    ) {
        $this->customer = $customer;
        $this->associateRoles = $associateRoles;
        $this->inheritedAssociateRoles = $inheritedAssociateRoles;
        $this->permissions = $permissions;
    }

    /**
     * <p>The Customer that acts as an Associate in the Business Unit.</p>
     *
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * <p>Roles assigned to Associates in the Business Unit.</p>
     *
     *
     * @return null|AssociateRoleCollection
     */
    public function getAssociateRoles()
    {
        if (is_null($this->associateRoles)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->associateRoles = AssociateRoleCollection::fromArray($data);
        }

        return $this->associateRoles;
    }

    /**
     * <p>Roles inherited by Associates from the parent Business Unit.</p>
     *
     *
     * @return null|AssociateRoleCollection
     */
    public function getInheritedAssociateRoles()
    {
        if (is_null($this->inheritedAssociateRoles)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INHERITED_ASSOCIATE_ROLES);
            if (is_null($data)) {
                return null;
            }
            $this->inheritedAssociateRoles = AssociateRoleCollection::fromArray($data);
        }

        return $this->inheritedAssociateRoles;
    }

    /**
     * <p>Permissions the Associate has in the Business Unit.</p>
     *
     *
     * @return null|array
     */
    public function getPermissions()
    {
        if (is_null($this->permissions)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PERMISSIONS);
            if (is_null($data)) {
                return null;
            }
            $this->permissions = $data;
        }

        return $this->permissions;
    }


    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param ?AssociateRoleCollection $associateRoles
     */
    public function setAssociateRoles(?AssociateRoleCollection $associateRoles): void
    {
        $this->associateRoles = $associateRoles;
    }

    /**
     * @param ?AssociateRoleCollection $inheritedAssociateRoles
     */
    public function setInheritedAssociateRoles(?AssociateRoleCollection $inheritedAssociateRoles): void
    {
        $this->inheritedAssociateRoles = $inheritedAssociateRoles;
    }

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void
    {
        $this->permissions = $permissions;
    }
}
