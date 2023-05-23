<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleSetPermissionsAction extends AssociateRoleUpdateAction
{
    public const FIELD_PERMISSIONS = 'permissions';

    /**
     * <p>Overrides the current list of Permissions for the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;
}
