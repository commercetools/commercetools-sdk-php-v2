<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleAddPermissionAction extends AssociateRoleUpdateAction
{
    public const FIELD_PERMISSION = 'permission';

    /**
     * <p>Permission to be added to the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getPermission();

    /**
     * @param ?string $permission
     */
    public function setPermission(?string $permission): void;
}
