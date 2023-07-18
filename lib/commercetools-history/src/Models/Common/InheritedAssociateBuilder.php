<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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

     * @var null|Reference|ReferenceBuilder
     */
    private $customer;

    /**

     * @return null|InheritedAssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments()
    {
        return $this->associateRoleAssignments;
    }

    /**

     * @return null|Reference
     */
    public function getCustomer()
    {
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
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
     * @param ?Reference $customer
     * @return $this
     */
    public function withCustomer(?Reference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?ReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): InheritedAssociate
    {
        return new InheritedAssociateModel(
            $this->associateRoleAssignments,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): InheritedAssociateBuilder
    {
        return new self();
    }
}
