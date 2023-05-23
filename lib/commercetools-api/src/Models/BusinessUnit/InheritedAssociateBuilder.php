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
 * @implements Builder<InheritedAssociate>
 */
final class InheritedAssociateBuilder implements Builder
{
    /**

     * @var ?InheritedAssociateRoleAssignmentCollection
     */
    private $associateRoleAssignments;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**
     * <p>Inherited roles of the Associate within a Business Unit.</p>
     *

     * @return null|InheritedAssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments()
    {
        return $this->associateRoleAssignments;
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
     * @param ?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments
     * @return $this
     */
    public function withAssociateRoleAssignments(?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments)
    {
        $this->associateRoleAssignments = $associateRoleAssignments;

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

    public function build(): InheritedAssociate
    {
        return new InheritedAssociateModel(
            $this->associateRoleAssignments,
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): InheritedAssociateBuilder
    {
        return new self();
    }
}
