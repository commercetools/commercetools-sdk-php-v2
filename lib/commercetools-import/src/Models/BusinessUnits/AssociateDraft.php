<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\BusinessUnits;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CustomerKeyReference;

interface AssociateDraft extends JsonObject
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ASSOCIATE_ROLE_ASSIGNMENTS = 'associateRoleAssignments';

    /**
     * <p>The Customer to be part of the Business Unit.</p>
     *

     * @return null|CustomerKeyReference
     */
    public function getCustomer();

    /**
     * <p>The roles to assign to the Associate.</p>
     *

     * @return null|AssociateRoleAssignmentDraftCollection
     */
    public function getAssociateRoleAssignments();

    /**
     * @param ?CustomerKeyReference $customer
     */
    public function setCustomer(?CustomerKeyReference $customer): void;

    /**
     * @param ?AssociateRoleAssignmentDraftCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentDraftCollection $associateRoleAssignments): void;
}
