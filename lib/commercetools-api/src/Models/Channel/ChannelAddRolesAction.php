<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelAddRolesAction extends ChannelUpdateAction
{
    public const FIELD_ROLES = 'roles';

    /**
     * @return null|array
     */
    public function getRoles();

    public function setRoles(?array $roles): void;
}
