<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateRemoveRolesAction extends StateUpdateAction
{
    public const FIELD_ROLES = 'roles';

    /**
     * @return null|array
     */
    public function getRoles();

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;
}
