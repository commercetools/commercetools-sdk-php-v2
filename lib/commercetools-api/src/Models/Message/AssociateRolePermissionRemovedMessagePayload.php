<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRolePermissionRemovedMessagePayload extends MessagePayload
{
    public const FIELD_PERMISSION = 'permission';

    /**
     * <p>The Permission that was removed from the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getPermission();

    /**
     * @param ?string $permission
     */
    public function setPermission(?string $permission): void;
}
