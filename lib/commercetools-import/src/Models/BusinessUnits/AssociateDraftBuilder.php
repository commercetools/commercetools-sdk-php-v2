<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CustomerKeyReference;
use Commercetools\Import\Models\Common\CustomerKeyReferenceBuilder;
use stdClass;

/**
 * @implements Builder<AssociateDraft>
 */
final class AssociateDraftBuilder implements Builder
{
    /**

     * @var null|CustomerKeyReference|CustomerKeyReferenceBuilder
     */
    private $customer;

    /**

     * @var ?AssociateRoleAssignmentDraftCollection
     */
    private $associateRoleAssignments;

    /**
     * <p>The Customer to be part of the Business Unit.</p>
     *

     * @return null|CustomerKeyReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerKeyReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>The roles to assign to the Associate.</p>
     *

     * @return null|AssociateRoleAssignmentDraftCollection
     */
    public function getAssociateRoleAssignments()
    {
        return $this->associateRoleAssignments;
    }

    /**
     * @param ?CustomerKeyReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerKeyReference $customer)
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
    public function withCustomerBuilder(?CustomerKeyReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): AssociateDraft
    {
        return new AssociateDraftModel(
            $this->customer instanceof CustomerKeyReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->associateRoleAssignments
        );
    }

    public static function of(): AssociateDraftBuilder
    {
        return new self();
    }
}
