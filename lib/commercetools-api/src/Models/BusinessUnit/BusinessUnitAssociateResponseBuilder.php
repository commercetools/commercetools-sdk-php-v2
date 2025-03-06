<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleCollection;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitAssociateResponse>
 */
final class BusinessUnitAssociateResponseBuilder implements Builder
{
    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var ?AssociateRoleCollection
     */
    private $associateRoles;

    /**

     * @var ?AssociateRoleCollection
     */
    private $inheritedAssociateRoles;

    /**

     * @var ?array
     */
    private $permissions;

    /**
     * <p>The Customer that acts as an Associate in the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Roles assigned to Associates in the Business Unit.</p>
     *

     * @return null|AssociateRoleCollection
     */
    public function getAssociateRoles()
    {
        return $this->associateRoles;
    }

    /**
     * <p>Roles inherited by Associates from the parent Business Unit.</p>
     *

     * @return null|AssociateRoleCollection
     */
    public function getInheritedAssociateRoles()
    {
        return $this->inheritedAssociateRoles;
    }

    /**
     * <p>Permissions the Associate has in the Business Unit.</p>
     *

     * @return null|array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?AssociateRoleCollection $associateRoles
     * @return $this
     */
    public function withAssociateRoles(?AssociateRoleCollection $associateRoles)
    {
        $this->associateRoles = $associateRoles;

        return $this;
    }

    /**
     * @param ?AssociateRoleCollection $inheritedAssociateRoles
     * @return $this
     */
    public function withInheritedAssociateRoles(?AssociateRoleCollection $inheritedAssociateRoles)
    {
        $this->inheritedAssociateRoles = $inheritedAssociateRoles;

        return $this;
    }

    /**
     * @param ?array $permissions
     * @return $this
     */
    public function withPermissions(?array $permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): BusinessUnitAssociateResponse
    {
        return new BusinessUnitAssociateResponseModel(
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->associateRoles,
            $this->inheritedAssociateRoles,
            $this->permissions
        );
    }

    public static function of(): BusinessUnitAssociateResponseBuilder
    {
        return new self();
    }
}
