<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StateAddRolesAction>
 */
final class StateAddRolesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $roles;

    /**
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function build(): StateAddRolesAction
    {
        return new StateAddRolesActionModel(
            $this->roles
        );
    }

    public static function of(): StateAddRolesActionBuilder
    {
        return new self();
    }
}
