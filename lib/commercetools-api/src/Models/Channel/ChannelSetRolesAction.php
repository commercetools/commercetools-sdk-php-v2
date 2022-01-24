<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelSetRolesAction extends ChannelUpdateAction
{
    public const FIELD_ROLES = 'roles';

    /**
     * <p>Value to set. If not specified, then <code>InventorySupply</code> is assigned by default.</p>
     *
     * @return null|array
     */
    public function getRoles();

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;
}
