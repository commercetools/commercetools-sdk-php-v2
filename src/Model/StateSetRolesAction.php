<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class StateSetRolesAction extends StateUpdateAction {
    protected $roles;
    const DISCRIMINATOR_VALUE = 'setRoles';

    /**
     * @return StateRoleEnumCollection
     */
    public function getRoles(): StateRoleEnumCollection
    {
        if (is_null($this->roles)) {
            $value = $this->raw('roles');
            if (!is_null($value)) {
                $this->roles = Mapper::map($value, StateRoleEnumCollection::class);
            } else {
                return Mapper::map([], StateRoleEnumCollection::class);
            }
        }
        return $this->roles;
    }
                
}
