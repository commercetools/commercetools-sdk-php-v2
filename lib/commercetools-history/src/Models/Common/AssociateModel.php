<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssociateModel extends JsonObjectModel implements Associate
{


    /**
     *
     * @var ?AssociateRoleAssignmentCollection
     */
    protected $associateRoleAssignments;

    /**
     *
     * @var ?Reference
     */
    protected $customer;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssociateRoleAssignmentCollection $associateRoleAssignments = null,
        ?Reference $customer = null
    ) {
        $this->associateRoleAssignments = $associateRoleAssignments;
        $this->customer = $customer;

    }

    /**
     *
     * @return null|AssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments()
    {
        if (is_null($this->associateRoleAssignments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE_ASSIGNMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->associateRoleAssignments = AssociateRoleAssignmentCollection::fromArray($data);
        }

        return $this->associateRoleAssignments;
    }

    /**
     *
     * @return null|Reference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = ReferenceModel::of($data);
        }

        return $this->customer;
    }


    /**
     * @param ?AssociateRoleAssignmentCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentCollection $associateRoleAssignments): void
    {
        $this->associateRoleAssignments = $associateRoleAssignments;
    }

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void
    {
        $this->customer = $customer;
    }



}
