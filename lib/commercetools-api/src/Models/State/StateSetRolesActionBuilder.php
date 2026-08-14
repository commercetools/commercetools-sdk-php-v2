<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StateSetRolesAction>
 */
final class StateSetRolesActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $roles;

    /**
     * <p>Value to set.
     * If the new value is the same as the current value, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.
     * If a specified role is not applicable to the State's <code>type</code>, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     * <p>Set to an empty array to remove any existing value.</p>
     *

     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param ?array $roles
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }


    public function build(): StateSetRolesAction
    {
        return new StateSetRolesActionModel(
            $this->roles
        );
    }

    public static function of(): StateSetRolesActionBuilder
    {
        return new self();
    }
}
