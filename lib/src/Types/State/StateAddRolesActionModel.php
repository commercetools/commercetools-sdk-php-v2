<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionModel;

class StateAddRolesActionModel extends StateUpdateActionModel implements StateAddRolesAction {
    const DISCRIMINATOR_VALUE = 'addRoles';

    /**
     * @var StateRoleEnumCollection
     */
    protected $roles;

    /**
     * @return StateRoleEnumCollection
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(StateAddRolesAction::FIELD_ROLES);
            if (is_null($value)) {
                return $this->mapData(StateRoleEnumCollection::class, null);
            }
            $value = $this->mapData(StateRoleEnumCollection::class, $value);
            $this->roles = $value;
        }
        return $this->roles;
    }

    /**
     * @param StateRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(StateRoleEnumCollection $roles)
    {
        $this->roles = $roles;

        return $this;
    }

}
