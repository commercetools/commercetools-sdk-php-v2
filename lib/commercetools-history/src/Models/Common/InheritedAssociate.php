<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface InheritedAssociate extends JsonObject
{

    public const FIELD_ASSOCIATE_ROLE_ASSIGNMENTS = 'associateRoleAssignments';
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>Inherited roles of the Associate within a Business Unit.</p>
     *

     * @return null|InheritedAssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that acts as an Associate in the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @param ?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?InheritedAssociateRoleAssignmentCollection $associateRoleAssignments): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;
}
