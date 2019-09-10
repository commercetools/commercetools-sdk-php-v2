<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

interface ChannelRemoveRolesAction extends ChannelUpdateAction
{
    const FIELD_ROLES = 'roles';

    /**
     * @return null|array
     */
    public function getRoles();

    public function setRoles(?array $roles): void;
}
