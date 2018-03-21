<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionModel;

class ChannelRemoveRolesActionModel extends ChannelUpdateActionModel implements ChannelRemoveRolesAction {
    const DISCRIMINATOR_VALUE = 'removeRoles';

    /**
     * @var ChannelRoleEnumCollection
     */
    protected $roles;

    /**
     * @return ChannelRoleEnumCollection
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(ChannelRemoveRolesAction::FIELD_ROLES);
            if (is_null($value)) {
                return $this->mapData(ChannelRoleEnumCollection::class, null);
            }
            $value = $this->mapData(ChannelRoleEnumCollection::class, $value);
            $this->roles = $value;
        }
        return $this->roles;
    }

    /**
     * @param ChannelRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(ChannelRoleEnumCollection $roles)
    {
        $this->roles = $roles;

        return $this;
    }

}
