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
    public const FIELD_ROLES = 'roles';
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>Roles assigned to the Associate within a Business Unit.</p>
     *

     * @return null|AssociateRoleAssignmentCollection
     */
    public function getAssociateRoleAssignments();

    /**
     * <p>Deprecated type. Use <code>associateRoleAssignments</code> instead.</p>
     *

     * @return null|array
     */
    public function getRoles();

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> that acts as an Associate in the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * @param ?AssociateRoleAssignmentCollection $associateRoleAssignments
     */
    public function setAssociateRoleAssignments(?AssociateRoleAssignmentCollection $associateRoleAssignments): void;

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;
}
