<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateRoleAssignmentDraftCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitAssociateDraft>
 */
final class MyBusinessUnitAssociateDraftBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var null|MyCustomerDraft|MyCustomerDraftBuilder
     */
    private $customer;

    /**

     * @var ?AssociateRoleAssignmentDraftCollection
     */
    private $associateRoleAssignments;

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p><a href="ctp:api:type:Customer">Customer</a> to create and assign to the Business Unit.</p>
     *

     * @return null|MyCustomerDraft
     */
    public function getCustomer()
    {
        return $this->customer instanceof MyCustomerDraftBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Roles assigned to the new Associate within a Business Unit. Can only contain <a href="ctp:api:type:AssociateRole">AssociateRoles</a> with the <code>buyerAssignable</code> property set to <code>true</code>.</p>
     *

     * @return null|AssociateRoleAssignmentDraftCollection
     */
    public function getAssociateRoleAssignments()
    {
        return $this->associateRoleAssignments;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?MyCustomerDraft $customer
     * @return $this
     */
    public function withCustomer(?MyCustomerDraft $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments
     * @return $this
     */
    public function withAssociateRoleAssignments(?AssociateRoleAssignmentDraftCollection $associateRoleAssignments)
    {
        $this->associateRoleAssignments = $associateRoleAssignments;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?MyCustomerDraftBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): MyBusinessUnitAssociateDraft
    {
        return new MyBusinessUnitAssociateDraftModel(
            $this->version,
            $this->customer instanceof MyCustomerDraftBuilder ? $this->customer->build() : $this->customer,
            $this->associateRoleAssignments
        );
    }

    public static function of(): MyBusinessUnitAssociateDraftBuilder
    {
        return new self();
    }
}
