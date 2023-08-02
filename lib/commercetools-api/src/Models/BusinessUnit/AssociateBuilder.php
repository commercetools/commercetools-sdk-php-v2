<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Associate>
 */
final class AssociateBuilder implements Builder
{
    /**

     * @var ?AssociateRoleAssignmentCollection
     */
    private $associateRoleAssignments;

    /**

     * @var ?array
     */
    private $roles;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**
     * <p>Roles assigned to the Associate within a Business Unit.</p>
     *

     * @return null|AssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments()
    {
        return $this->associateRoleAssignments;
    }

    /**
     * <p>Deprecated type. Use <code>associateRoleAssignment</code> instead.</p>
     *

     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that acts as an Associate in the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @param ?AssociateRoleAssignmentCollection $associateRoleAssignments
     * @return $this
     */
    public function withAssociateRoleAssignments(?AssociateRoleAssignmentCollection $associateRoleAssignments)
    {
        $this->associateRoleAssignments = $associateRoleAssignments;

        return $this;
    }

    /**
     * @param ?array $roles
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
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
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): Associate
    {
        return new AssociateModel(
            $this->associateRoleAssignments,
            $this->roles,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): AssociateBuilder
    {
        return new self();
    }
}
