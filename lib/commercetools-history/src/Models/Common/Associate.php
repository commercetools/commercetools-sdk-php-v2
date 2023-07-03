<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Associate extends JsonObject
{

    public const FIELD_ASSOCIATE_ROLE_ASSIGNMENTS = 'associateRoleAssignments';
    public const FIELD_CUSTOMER = 'customer';

    /**

     * @return null|AssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments();

    /**

     * @return null|Reference
     */
    public function getCustomer();

    /**
     * @param ?AssociateRoleAssignmentCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentCollection $associateRoleAssignments): void;

    /**
     * @param ?Reference $customer
     */
    public function setCustomer(?Reference $customer): void;
}
