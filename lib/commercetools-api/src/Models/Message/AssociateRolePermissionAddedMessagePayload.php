<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRolePermissionAddedMessagePayload extends MessagePayload
{
    public const FIELD_PERMISSION = 'permission';

    /**
     * <p>The Permission that was added to the AssociateRole.</p>
     *

     * @return null|string
     */
    public function getPermission();

    /**
     * @param ?string $permission
     */
    public function setPermission(?string $permission): void;
}
