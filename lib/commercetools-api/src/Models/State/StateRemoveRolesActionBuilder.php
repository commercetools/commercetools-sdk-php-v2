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
 * @implements Builder<StateRemoveRolesAction>
 */
final class StateRemoveRolesActionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $roles;

    /**
     * <p>Roles to remove from the State.</p>
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


    public function build(): StateRemoveRolesAction
    {
        return new StateRemoveRolesActionModel(
            $this->roles
        );
    }

    public static function of(): StateRemoveRolesActionBuilder
    {
        return new self();
    }
}
