<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRolePermissionsSetMessage extends Message
{
    public const FIELD_PERMISSIONS = 'permissions';

    /**
     * <p>Permission assigned to the AssociateRole.</p>
     *

     * @return null|array
     */
    public function getPermissions();

    /**
     * @param ?array $permissions
     */
    public function setPermissions(?array $permissions): void;
}
