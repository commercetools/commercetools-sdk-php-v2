<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\State\StateUpdateActionModel;

class StateAddRolesActionModel extends StateUpdateActionModel implements StateAddRolesAction
{
    const DISCRIMINATOR_VALUE = 'addRoles';

    /**
     * @var array
     */
    protected $roles;

    /**
     * @return array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(StateAddRolesAction::FIELD_ROLES);
            $value = (array)$value;
            $this->roles = $value;
        }
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

}
