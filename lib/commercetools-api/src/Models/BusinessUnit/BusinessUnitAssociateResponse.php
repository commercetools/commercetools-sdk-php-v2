<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\AssociateRole\AssociateRoleCollection;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAssociateResponse extends JsonObject
{
    public const FIELD_CUSTOMER = 'customer';
    public const FIELD_ASSOCIATE_ROLES = 'associateRoles';
    public const FIELD_INHERITED_ASSOCIATE_ROLES = 'inheritedAssociateRoles';
    public const FIELD_PERMISSIONS = 'permissions';

    /**
     * <p>The Customer that acts as an Associate in the Business Unit.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer();

    /**
     * <p>Roles assigned to Associates in the Business Unit.</p>
     *

     * @return null|AssociateRoleCollection
     */
    public function getAssociateRoles();

    /**
     * <p>Roles inherited by Associates from the parent Business Unit.</p>
     *

     * @return null|AssociateRoleCollection
     */
    public function getInheritedAssociateRoles();

    /**
     * <p>Permissions the Associate has in the Business Unit.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * @param ?CustomerReference $customer
     */
    public function setCustomer(?CustomerReference $customer): void;

    /**
     * @param ?AssociateRoleCollection $associateRoles
     */
    public function setAssociateRoles(?AssociateRoleCollection $associateRoles): void;

    /**
     * @param ?AssociateRoleCollection $inheritedAssociateRoles
     */
    public function setInheritedAssociateRoles(?AssociateRoleCollection $inheritedAssociateRoles): void;

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;
}
