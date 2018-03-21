<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

interface StateRemoveRolesAction extends StateUpdateAction {
    const FIELD_ROLES = 'roles';

    /**
     * @return StateRoleEnumCollection
     */
    public function getRoles();

    /**
     * @param StateRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(StateRoleEnumCollection $roles);

}
