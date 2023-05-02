<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

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
final class InheritedAssociateModel extends JsonObjectModel implements InheritedAssociate
{
    /**
     *
     * @var ?InheritedAssociateRoleAssignmentCollection
     */
    protected $associateRoleAssignments;

    /**
     *
     * @var ?CustomerReference
     */
    protected $customer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments = null,
        ?CustomerReference $customer = null
    ) {
        $this->associateRoleAssignments = $associateRoleAssignments;
        $this->customer = $customer;
    }

    /**
     * <p>Inherited roles of the Associate within a Business Unit.</p>
     *
     *
     * @return null|InheritedAssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments()
    {
        if (is_null($this->associateRoleAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->associateRoleAssignments = InheritedAssociateRoleAssignmentCollection::fromArray($data);
        }

        return $this->associateRoleAssignments;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that acts as an Associate in the Business Unit.</p>
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
     * @param ?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments): void
    {
        $this->associateRoleAssignments = $associateRoleAssignments;
    }

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
}
