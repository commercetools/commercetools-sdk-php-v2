<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateSetRolesAction extends StateUpdateAction
{
    public const FIELD_ROLES = 'roles';

    /**
     * <p>Value to set.
     * If the new value is the same as the current value, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.
     * If a specified role is not applicable to the State's <code>type</code>, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     * <p>Set to an empty array to remove any existing value.</p>
     *

     * @return null|array
     */
    public function getRoles();

    /**
     * @param ?array $roles
     */
    public function setRoles(?array $roles): void;
}
